<?php

namespace App\Http\Controllers\Registration\Stock;

use App\Models\Stock;
use App\Models\Company;
use App\Models\Product;
use App\Models\ProductProvider;
use App\Models\ProductImage;
use App\Models\Variation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Str;

class ProductController extends Controller
{
    public $unit_dimension = [
        'QT' => 'Quantidade (qt)',
        'UN' => 'Unidade (Un)',
        'M' => 'Metro (m)',
        'M²' => 'Metro Quadrado (m²)',
        'KG' => 'Kilograma (Kg)',
        'G' => 'Grama (g)',
        'L' => 'Litros (L)',
    ];

    public function view_product()
    {
        $unit_dimension = $this->unit_dimension;
        $companies = getCompanies()->get();

        return view('registration.stock.product.product', get_defined_vars());
    }

    public function create_product()
    {
        $unit_dimension = $this->unit_dimension;
        $companies = getCompanies()->get();
        return view('registration.stock.product.create', get_defined_vars());
    }

    public function store_product(Request $request)
    {
        // dd($request->all());
        $product['product_name']            = $request->product_name;
        $product['company_id']              = $request->company_id;
        $product['sku']                     = $request->sku;
        $product['product_type']            = $request->product_type;
        $product['sales_format']            = $request->sales_format;
        $product['unit_dimension']          = $request->unit_dimension;
        $product['sale_price']              = $request->sale_price;
        $product['liquid_weight']           = $request->liquid_weight;
        $product['gross_weight']            = $request->gross_weight;
        $product['items_box']               = $request->items_box;
        $product['width']                   = $request->width;
        $product['height']                  = $request->height;
        $product['depth']                   = $request->depth;
        $product['measure']                 = $request->measure;
        $product['gtin_ean']                = $request->gtin_ean;
        $product['gtin_ean_tax']            = $request->gtin_ean_tax;
        $product['production']              = $request->production;
        $product['condition']               = $request->condition;
        $product['deposit_id']              = $request->product_type !== 'S' ? $request->deposit : null;
        $product['stock_min']               = $request->stock_min;
        $product['stock_max']               = $request->stock_max;
        $product['quantity']                = $request->quantity;
        $product['purchase_price']          = $request->purchase_price;
        $product['source']                  = $request->source;
        $product['ncm']                     = $request->ncm;
        $product['cest']                    = $request->cest;
        $product['item_type']               = $request->item_type;
        $product['tax_percentage']          = $request->tax_percentage;
        $product['product_group']           = $request->product_group;
        $product['base_value_icms_st']      = $request->base_value_icms_st;
        $product['value_icms_st']           = $request->value_icms_st;
        $product['substitute_icms_value']   = $request->substitute_icms_value;
        $product['tipi_exception_code']     = $request->tipi_exception_code;
        $product['fixed_pis_value']         = $request->fixed_pis_value;
        $product['fixed_cofins_value']      = $request->fixed_cofins_value;
        $product['add_information']         = $request->add_information;
        $product['short_description']       = $request->short_description;
        $product['description']             = $request->description;
        $product_data = Product::create($product);

        if($request->product_type !== 'S'){
            $stock['product_id']    = $product_data->id;
            $stock['type']          = "E";
            $stock['quantity']      = $request->quantity;
            $stock['description']   = 'Entrada Inicial (Produto cadastrado)';
            $stock_data = Stock::create($stock);
        }

        if(isset($request->variacoes)){
            foreach($request->variacoes as $variacoes){
                $product['sku']                 = $request->sku.'-'.Str::random(4);
                $product['parent_product_id']   = $product_data->id;
                $product['sale_price']          = $variacoes['price'];
                $copy_product_data = Product::create($product);

                $stock['product_id'] = $copy_product_data->id;
                $stock_data = Stock::create($stock);

                foreach($variacoes['atributo'] as $attr){
                    $variation['parent_product_id'] = $product_data->id;
                    $variation['product_id']        = $copy_product_data->id;
                    $variation['attribute_name']    = explode(':', $attr)[0];
                    $variation['attribute_value']   = explode(':', $attr)[1];

                    Variation::create($variation);
                }
            }
        }

        if(isset($request->providers)){
            foreach($request->providers as $provider){
                $product_provider['product_id']     = $product_data->id;
                $product_provider['provider_id']    = $provider['provider_id'];
                $product_provider['provider_name']  = $provider['provider_name'];
                $product_provider['cost_price']     = $provider['cost_price'];
                $product_provider_data = ProductProvider::create($product_provider);
            }
        }

        $originalPath = storage_path('app/public/company_'.$request->company_id.'/product_'.$product_data->id.'/');
        if (!file_exists($originalPath)) {
            mkdir($originalPath, 0777, true);
        }
        if(isset($request->foto)){
            foreach($request->foto as $foto){
                $img = Image::make($foto);

                $name = Str::random() . '.jpg';

                $img->save($originalPath . $name);

                ProductImage::create([
                    'product_id' => $product_data->id,
                    'path_image' => $name
                ]);
            }
        }

        $rota = route('registration.stock.product');
        $msg = 'Produto Criado Com Sucesso!';

        return view('success', get_defined_vars());
    }

    public function edit_product($id)
    {
        $unit_dimension = $this->unit_dimension;
        $companies = getCompanies()->get();

        $product = getCompanies()->whereHas('products', function($query) use($id) {
            return $query->where('id', $id);
        })->with(['products' => function($query) use($id) {
            return $query->find($id);
        }])->first()->products->first();

        return view('registration.stock.product.edit', get_defined_vars());
    }

    public function update_product(Request $request)
    {
        // dd($request->all());
        $product['product_name']            = $request->product_name;
        $product['company_id']              = $request->company_id;
        $product['sku']                     = $request->sku;
        $product['product_type']            = $request->product_type;
        $product['sales_format']            = $request->sales_format;
        $product['unit_dimension']          = $request->unit_dimension;
        $product['sale_price']              = $request->sale_price;
        $product['liquid_weight']           = $request->liquid_weight;
        $product['gross_weight']            = $request->gross_weight;
        $product['items_box']               = $request->items_box;
        $product['width']                   = $request->width;
        $product['height']                  = $request->height;
        $product['depth']                   = $request->depth;
        $product['measure']                 = $request->measure;
        $product['gtin_ean']                = $request->gtin_ean;
        $product['gtin_ean_tax']            = $request->gtin_ean_tax;
        $product['production']              = $request->production;
        $product['condition']               = $request->condition;
        $product['deposit_id']              = $request->product_type !== 'S' ? $request->deposit : null;
        $product['stock_min']               = $request->stock_min;
        $product['stock_max']               = $request->stock_max;
        $product['quantity']                = $request->quantity;
        $product['purchase_price']          = $request->purchase_price;
        $product['source']                  = $request->source;
        $product['ncm']                     = $request->ncm;
        $product['cest']                    = $request->cest;
        $product['item_type']               = $request->item_type;
        $product['tax_percentage']          = $request->tax_percentage;
        $product['product_group']           = $request->product_group;
        $product['base_value_icms_st']      = $request->base_value_icms_st;
        $product['value_icms_st']           = $request->value_icms_st;
        $product['substitute_icms_value']   = $request->substitute_icms_value;
        $product['tipi_exception_code']     = $request->tipi_exception_code;
        $product['fixed_pis_value']         = $request->fixed_pis_value;
        $product['fixed_cofins_value']      = $request->fixed_cofins_value;
        $product['add_information']         = $request->add_information;
        $product['short_description']       = $request->short_description;
        $product['description']             = $request->description;
        $product_data = Product::find($request->product_id)->update($product);

        if($request->product_type !== 'S'){
            if($request->quantity > 0){
                $stock['product_id']    = $request->product_id;
                $stock['type']          = "E";
                $stock['quantity']      = $request->quantity;
                $stock['description']   = 'Atualização de estoque (Produto cadastrado)';
                $stock_data = Stock::create($stock);
            }
        }

        if(isset($request->variacoes)){
            foreach($request->variacoes as $variacoes){
                $product['sku']                 = $request->sku.'-'.Str::random(4);
                $product['parent_product_id']   = $product_data->id;
                $product['sale_price']          = $variacoes['price'];
                $copy_product_data = Product::create($product);

                if($request->quantity > 0){
                    $stock['product_id'] = $copy_product_data->id;
                    $stock_data = Stock::create($stock);
                }

                foreach($variacoes['atributo'] as $attr){
                    $variation['parent_product_id'] = $product_data->id;
                    $variation['product_id']        = $copy_product_data->id;
                    $variation['attribute_name']    = explode(':', $attr)[0];
                    $variation['attribute_value']   = explode(':', $attr)[1];

                    Variation::create($variation);
                }
            }
        }

        if(isset($request->providers)){
            foreach($request->providers as $provider){
                $provider_verif = ProductProvider::where('product_id', $request->product_id)->where('provider_id',$provider['provider_id'])->get();

                $product_provider['product_id']     = $request->product_id;
                $product_provider['provider_id']    = $provider['provider_id'];
                $product_provider['provider_name']  = $provider['provider_name'];
                $product_provider['cost_price']     = $provider['cost_price'];
                if($provider_verif->count() == 0){
                    $product_provider_data = ProductProvider::create($product_provider);
                }else{
                    ProductProvider::where('product_id', $request->product_id)->where('provider_id',$provider['provider_id'])->update($product_provider);
                }
            }
        }

        $originalPath = storage_path('app/public/company_'.$request->company_id.'/product_'.$request->product_id.'/');
        if (!file_exists($originalPath)) {
            mkdir($originalPath, 0777, true);
        }
        if(isset($request->foto)){
            foreach($request->foto as $foto){
                $img = Image::make($foto);

                $name = Str::random() . '.jpg';

                $img->save($originalPath . $name);

                ProductImage::create([
                    'product_id' => $request->product_id,
                    'path_image' => $name
                ]);
            }
        }

        if(isset($request->delete_image)){
            foreach($request->delete_image as $image){
                $image = ProductImage::find($image);
                \Storage::delete('public/company_'.$request->company_id.'/product_'.$request->product_id.'/'.$image->path_image);
                $image->delete();
            }
        }

        $rota = route('registration.stock.product');
        $msg = 'Produto Criado Com Sucesso!';

        return view('success', get_defined_vars());
    }

    public function destroy_product(Request $request)
    {
        Product::find($request->id)->update(['status' => '0']);
        return response()->json($request->id);
    }
}
