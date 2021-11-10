@extends('layouts.painel')

@section('content')
    {{-- Inputs hidden de recuperação --}}
    <input type="hidden" id="productProviders" value="{{isset($product->providers) ? json_encode($product->providers) : ''}}">
    {{-- --------- --}}
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="iq-card">
                        <div class="iq-card-header">
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">Registrar um Produto ou Serviço</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <a href="{{route('registration.stock.product')}}" class="btn btn-block btn-success"><i class="ri-arrow-left-line"></i> Voltar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <form action="{{route('registration.stock.product')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <div class="row justify-content-center">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="company_id">Empresa <span class="text-danger">*</span></label>
                                        <select name="company_id" id="company_with" class="form-control @error('company_id') is-invalid @enderror">
                                            <option value="">Selecione uma Opção</option>
                                            @foreach ($companies as $company)
                                                <option value="{{$company->id}}" data-dados="{{$company}}" @if($company->id == $product->company_id) selected @endif>{{$company->corporate_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs justify-content-center" id="productTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="dadosGerais-tab-justify" data-toggle="tab" href="#dadosGerais-justify" role="tab" aria-controls="dadosGerais" aria-selected="true">Dados Gerais</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="estoque-tab-justify" data-toggle="tab" href="#estoque-justify" role="tab" aria-controls="estoque" aria-selected="false">Estoque</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="fornecedores-tab-justify" data-toggle="tab" href="#fornecedores-justify" role="tab" aria-controls="fornecedores" aria-selected="false">Fornecedores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tributacao-tab-justify" data-toggle="tab" href="#tributacao-justify" role="tab" aria-controls="tributacao" aria-selected="false">Tributação</a>
                                    </li>
                                    <li class="nav-item d-none">
                                        <a class="nav-link" id="variacoes-tab-justify" data-toggle="tab" href="#variacoes-justify" role="tab" aria-controls="variacoes" aria-selected="false">Variações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="imagens-tab-justify" data-toggle="tab" href="#imagens-justify" role="tab" aria-controls="imagens" aria-selected="false">Imagens</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="informacaoAdicional-tab-justify" data-toggle="tab" href="#informacaoAdicional-justify" role="tab" aria-controls="informacaoAdicional" aria-selected="false">Informações Adicionais</a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="productTabDiv">
                                    <div class="tab-pane fade show active" id="dadosGerais-justify" role="tabpanel" aria-labelledby="dadosGerais-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12 col-md-12">
                                                <label for="product_name">Nome do Produto <span class="text-danger">*</span></label>
                                                <input name="product_name" type="text" value="{{$product->product_name}}" class="form-control" placeholder="Nome do Produto">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="sku">Codigo (SKU)</label>
                                                <input name="sku" value="{{explode('-', $product->sku)[1] ?? $product->sku}}" type="text" class="form-control" placeholder="Codigo do Produto">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="product_type">Tipo de Produto</label>
                                                <select name="product_type" id="product_type" class="form-control select2">
                                                    <option value="P" {{$product->product_type == 'P' ? 'selected' : ''}}>Produto</option>
                                                    <option value="S" {{$product->product_type == 'S' ? 'selected' : ''}}>Serviço</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="sales_format">Formato de Venda</label>
                                                <select name="sales_format" id="sales_format" class="form-control select2">
                                                    <option value="S" {{$product->sales_format == 'S' ? 'selected' : ''}}>Simples</option>
                                                    <option value="CV" {{$product->sales_format == 'CV' ? 'selected' : ''}}>Com Variação</option>
                                                    {{-- <option value="CC" {{old('sales_format') == 'CC' ? 'selected' : ''}}>Com Composição</option> --}}
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="unit_dimension">Unidade de Medida</label>
                                                <select name="unit_dimension" class="form-control select2">
                                                    @foreach ($unit_dimension as $key => $value)
                                                        <option value="{{$key}}" {{$product->unit_dimension == $key ? 'selected' : ''}}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3 sale-price">
                                                <label for="sale_price">Preço de Venda R$</label>
                                                <input name="sale_price" value="{{$product->sale_price}}" type="text" class="form-control" placeholder="Preço de Venda">
                                            </div>
                                        </div>

                                        <div class="row caracteristicas">
                                            <div class="form-group col-12"><h4>Caracteristicas</h4></div>

                                            <div class="form-group col-12 col-md-12">
                                                <label for="liquid_weight">Peso Liquido</label>
                                                <input name="liquid_weight" type="text" value="{{$product->liquid_weight}}" class="form-control" placeholder="Peso Liquido">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="gross_weight">Peso Bruto</label>
                                                <input name="gross_weight" value="{{$product->gross_weight}}" type="text" class="form-control" placeholder="Peso Bruto">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="items_box">Itens p/ Caixa</label>
                                                <input name="items_box" value="{{$product->items_box}}" type="text" class="form-control" placeholder="Itens p/ Caixa">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="width">Largura</label>
                                                <input name="width" value="{{$product->width}}" type="text" class="form-control" placeholder="Largura">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="height">Altura</label>
                                                <input name="height" value="{{$product->height}}" type="text" class="form-control" placeholder="Itens p/ Caixa">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="depth">Profundidade</label>
                                                <input name="depth" value="{{$product->depth}}" type="text" class="form-control" placeholder="Itens p/ Caixa">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="measure">Medida</label>
                                                <select name="measure" id="measure" class="form-control select2">
                                                    <option value="M" {{$product->measure == 'M' ? 'selected' : ''}}>Metros</option>
                                                    <option value="C" {{$product->measure == 'C' ? 'selected' : ''}}>Centímetro</option>
                                                    <option value="MM" {{$product->measure == 'MM' ? 'selected' : ''}}>Milímetro</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3 sale-price">
                                                <label for="gtin_ean">GTIN/EAN</label>
                                                <input name="gtin_ean" value="{{$product->gtin_ean}}" type="text" class="form-control" placeholder="GTIN/EAN">
                                            </div>
                                            <div class="form-group col-12 col-md-3 sale-price">
                                                <label for="gtin_ean_tax">GTIN/EAN Tributário</label>
                                                <input name="gtin_ean_tax" value="{{$product->gtin_ean_tax}}" type="text" class="form-control" placeholder="GTIN/EAN">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="production">Produção</label>
                                                <select name="production" id="production" class="form-control select2">
                                                    <option value="P" {{$product->product == 'P' ? 'selected' : ''}}>Própria</option>
                                                    <option value="T" {{$product->product == 'T' ? 'selected' : ''}}>Terceiros</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="condition">Condição</label>
                                                <select name="condition" id="condition" class="form-control select2">
                                                    <option value="N" {{$product->condition == 'N' ? 'selected' : ''}}>Novo</option>
                                                    <option value="U" {{$product->condition == 'U' ? 'selected' : ''}}>Usado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="estoque-justify" role="tabpanel" aria-labelledby="estoque-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12"><h4>Estoque</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="stock_min">Minimo</label>
                                                <input name="stock_min" type="text" value="{{$product->stock_min}}" class="form-control" placeholder="Minimo">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="stock_max">Maximo</label>
                                                <input name="stock_max" value="{{$product->stock_max}}" type="text" class="form-control" placeholder="Maximo">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12"><h4>Saldo em Estoque Inicial</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="deposit">Depositos</label>
                                                <select name="deposit" class="form-control select2"></select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="quantity">Quantidade</label>
                                                <input name="quantity" type="text" value="0" class="form-control" placeholder="Quantidade">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="purchase_price">Preço de Compra Unitário R$</label>
                                                <input name="purchase_price" value="{{$product->purchase_price}}" type="text" class="form-control" placeholder="Preço de Compra Unitário">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fornecedores-justify" role="tabpanel" aria-labelledby="fornecedores-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12 col-md-4">
                                                <label for="client_supplier">Fornecedor</label>
                                                <div class="input-group">
                                                    <select name="client_supplier" id="client_supplier" class="form-control select2"></select>
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-success btn-add-fornecedor"><i class="ri-add-fill"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="fornecedores mb-3"></div>
                                    </div>
                                    <div class="tab-pane fade" id="tributacao-justify" role="tabpanel" aria-labelledby="tributacao-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12 col-md-6">
                                                <label for="source">Origem</label>
                                                <select name="source" class="form-control select2">
                                                    <option value="0" @if($product->source == '0') selected @endif>0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8</option>
                                                    <option value="1" @if($product->source == '1') selected @endif>1 - Estrangeira - Importação direta, exceto a indicada no código 6</option>
                                                    <option value="2" @if($product->source == '2') selected @endif>2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7</option>
                                                    <option value="3" @if($product->source == '3') selected @endif>3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70%</option>
                                                    <option value="4" @if($product->source == '4') selected @endif>4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes</option>
                                                    <option value="5" @if($product->source == '5') selected @endif>5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%</option>
                                                    <option value="6" @if($product->source == '6') selected @endif>6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX</option>
                                                    <option value="7" @if($product->source == '7') selected @endif>7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX</option>
                                                    <option value="8" @if($product->source == '8') selected @endif>8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="ncm">NCM</label>
                                                <input name="ncm" type="text" value="{{$product->ncm}}" class="form-control" placeholder="NCM">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="cest">CEST</label>
                                                <input name="cest" value="{{$product->cest}}" type="text" class="form-control" placeholder="CEST">
                                            </div>
                                            <div class="form-group col-12 col-md-4">
                                                <label for="item_type">Tipo do Item</label>
                                                <select name="item_type" class="form-control select2">
                                                    <option value="">Selecione uma Opção</option>
                                                    <option value="00"  @if($product->item_type == '00') selected @endif>Mercadoria para Revenda</option>
                                                    <option value="01"  @if($product->item_type == '01') selected @endif>Matéria-Prima</option>
                                                    <option value="02"  @if($product->item_type == '02') selected @endif>Embalagem</option>
                                                    <option value="03"  @if($product->item_type == '03') selected @endif>Produto em Processo</option>
                                                    <option value="04"  @if($product->item_type == '04') selected @endif>Produto Acabado</option>
                                                    <option value="05"  @if($product->item_type == '05') selected @endif>Subproduto</option>
                                                    <option value="06"  @if($product->item_type == '06') selected @endif>Produto Intermediário</option>
                                                    <option value="07"  @if($product->item_type == '07') selected @endif>Material de Uso e Consumo</option>
                                                    <option value="08"  @if($product->item_type == '08') selected @endif>Ativo Imobilizado</option>
                                                    <option value="09"  @if($product->item_type == '09') selected @endif>Serviços</option>
                                                    <option value="10"  @if($product->item_type == '10') selected @endif>Outros insumos</option>
                                                    <option value="99"  @if($product->item_type == '99') selected @endif>Outras</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="tax_percentage">% Tributos</label>
                                                <input name="tax_percentage" value="{{$product->tax_percentage}}" type="text" class="form-control" placeholder="CEST">
                                            </div>
                                            <div class="form-group col-12 col-md-4">
                                                <label for="product_group">Grupo de Produtos</label>
                                                <select name="product_group" class="form-control select2"></select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12"><h4>ICMS</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="base_value_icms_st">Valor Base ICMS ST Para Retenção</label>
                                                <input name="base_value_icms_st" type="text" value="{{$product->base_value_icms_st}}" class="form-control" placeholder="Valor Base ICMS ST Para Retenção">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="value_icms_st">Valor ICMS ST Para Retenção</label>
                                                <input name="value_icms_st" value="{{$product->value_icms_st}}" type="text" class="form-control" placeholder="Valor ICMS ST Para Retenção">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="substitute_icms_value">Valor ICMS Própio do Súbstituto</label>
                                                <input name="substitute_icms_value" value="{{$product->substitute_icms_value}}" type="text" class="form-control" placeholder="Valor ICMS Própio do Súbstituto">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12"><h4>IPI</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="tipi_exception_code">Codigo Exceção da TIPI</label>
                                                <input name="tipi_exception_code" type="text" value="{{$product->tipi_exception_code}}" class="form-control" placeholder="Codigo Exceção da TIPI">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12"><h4>PIS / COFINS</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="fixed_pis_value">Valor PIS Fixo</label>
                                                <input name="fixed_pis_value" type="text" value="{{$product->fixed_pis_value}}" class="form-control" placeholder="Valor PIS Fixo">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="fixed_cofins_value">Valor COFINS Fixo</label>
                                                <input name="fixed_cofins_value" value="{{$product->fixed_cofins_value}}" type="text" class="form-control" placeholder="Valor COFINS Fixo">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12"><h4>Dados Adicionais</h4></div>

                                            <div class="form-group col-12">
                                                <label for="add_information">Informações Adicionais</label>
                                                <textarea name="add_information" class="form-control">{{$product->add_information}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="variacoes-justify" role="tabpanel" aria-labelledby="variacoes-tab-justify">
                                        <div class="row my-2 justify-content-center">
                                            <div class="form-group col-8 col-md-4">
                                                <label for="">Quantidade de Variações & Atributos</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button type="button" class="btn btn-primary btn-add-variacao"><i class="ri-add-fill"></i> Adcionar Variações</button>
                                                    </div>
                                                    <input type="text" class="form-control q-variacoes" placeholder="Q. Variação">
                                                    <input type="text" class="form-control q-atributos" placeholder="Q. Atributos">
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($product->productVariations as $productVariations)
                                            <div class="row my-2">
                                                <div class="col-12 col-md-3 my-1">
                                                    Nome do Produto: {{$productVariations->product_name}}
                                                </div>
                                                <div class="col-12 col-md-3 my-1">
                                                    SKU: {{$productVariations->sku}}
                                                </div>
                                                <div class="col-12 col-md-3 my-1">
                                                    Atributos: 
                                                    @foreach ($productVariations->parentVariations as $variation)
                                                        {{$variation->attribute_name}}:{{$variation->attribute_value}} / 
                                                    @endforeach
                                                </div>
                                                <div class="col-12 col-md-3 my-1">
                                                    Preço: {{$productVariations->sale_price}}
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="variacoes mb-4"></div>
                                    </div>
                                    <div class="tab-pane fade" id="imagens-justify" role="tabpanel" aria-labelledby="imagens-tab-justify">
                                        <div class="row">
                                            @foreach ($product->images as $image)
                                                <div class="col-6 col-md-3 mb-2">
                                                    <label for="delete_image">
                                                        <input type="checkbox" id="delete_image" value="{{$image->id}}" name="delete_image[]">
                                                        Excluir
                                                    </label>
                                                    <div class="foto"><img src="{{asset('storage/company_'.$product->company_id.'/product_'.$product->id.'/'.$image->path_image)}}" class="rounded img-fluid" alt=""></div>
                                                </div>
                                            @endforeach
                                            <div class="col-6 col-md-3 mb-2">
                                                <button type="button" class="btn btn-primary btn-add-foto mb-2"><i class="ri-add-fill"></i> Anexar Foto</button>
                                                <input type="file" name="foto[]" class="d-none add-foto">
                                                <div class="foto"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="informacaoAdicional-justify" role="tabpanel" aria-labelledby="informacaoAdicional-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12 my-3">
                                                <label for="short_description">Descrição Curta</label>
                                                <textarea name="short_description" class="form-control">{{$product->short_description}}</textarea>
                                            </div>
                                            <div class="form-group col-12 my-3">
                                                <label for="description">Descrição Completa</label>
                                                <textarea name="description" class="form-control">{{$product->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-6">
                                        <button type="submit" class="btn btn-block btn-primary"><i class="ri-save-3-line"></i> Gravar Dados</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('.select2-container').css('min-width', '200px');
        $('#company_with, #product_type, #sales_format').trigger('change');
        $('[name="deposit"]').val('{{$product->deposit->id}}').trigger('change');
        $('[name="product_group"]').val('{{$product->product_group}}').trigger('change');

        $(function(){
            if($('#productProviders').val() !== ''){
                $.each(JSON.parse($('#productProviders').val()), (key, value) => {
                    $('#client_supplier').val(value.provider_id).trigger('change');
                    $('.btn-add-fornecedor').trigger('click');

                    $('[name="providers['+value.provider_id+'][cost_price]"]').val(value.cost_price);
                })
            }
        });
    });
</script>
@endsection