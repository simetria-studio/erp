@extends('layouts.painel')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="iq-card">
                        <div class="iq-card-header">
                            <div class="row pt-3">
                                <div class="col-6">
                                    <div class="iq-header-title">
                                        <h4 class="card-title">produtos & Serviços</h4>
                                    </div>
                                </div>
                                <div class="col-6 row justify-content-end">
                                    <div class="col-6">
                                        <a href="{{route('registration.stock.product.create')}}" class="btn btn-block btn-success"><i class="ri-add-fill"></i> Novo Registro</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="iq-card-body">
                            <div class="table-container">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Cod. Interno</th>
                                            <th>Empresa</th>
                                            <th>SKU</th>
                                            <th>Produto/Serviço</th>
                                            <th>Deposito</th>
                                            <th>Estoque</th>
                                            <th>Unidade de Medida</th>
                                            <th>Preço de Venda</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="Products">
                                        @foreach ($companies as $company)
                                            @foreach ($company->products as $product)
                                                <tr class="tr-id-{{$product->id}}">
                                                    {{-- <td>{{str_pad($product->id, 4, '0', STR_PAD_LEFT)}}</td> --}}
                                                    <td>{{\Str::padLeft($product->id, 4, '0')}}</td>
                                                    <td>{{$company->corporate_name}}</td>
                                                    <td>{{$product->sku}}</td>
                                                    <td>
                                                        {{$product->product_type == 'S' ? '(Serviço)' : '(Produto)'}}
                                                        {{$product->product_name}}
                                                    </td>
                                                    <td>{{$product->deposit->name ?? 'Sem Deposito'}}</td>
                                                    <td>{{$product->quantity ?? 0}}</td>
                                                    <td>{{$unit_dimension[$product->unit_dimension]}}</td>
                                                    <td>R$ {{number_format($product->sale_price, 2, ',', '.')}}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Products" data-dados="{{json_encode(['id' => $product->id])}}" data-route="{{route('registration.stock.product')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                            <a href="{{route('registration.stock.product.edit', $product->id)}}" class="btn btn-info"><i class="ri-edit-box-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @foreach ($product->productVariations as $variation)
                                                    <tr class="tr-id-{{$variation->id}}">
                                                        <td>{{\Str::padLeft($product->id, 4, '0')}} - {{\Str::padLeft($variation->id, 4, '0')}}</td>
                                                        <td>{{$company->corporate_name}}</td>
                                                        <td>{{$variation->sku}}</td>
                                                        <td>
                                                            {{$variation->product_type == 'S' ? '(Serviço)' : '(Produto)'}}
                                                            {{$variation->product_name}}
                                                        </td>
                                                        <td>{{$variation->deposit->name ?? 'Sem Deposito'}}</td>
                                                        <td>{{$variation->quantity ?? 0}}</td>
                                                        <td>{{$unit_dimension[$variation->unit_dimension]}}</td>
                                                        <td>R$ {{number_format($variation->sale_price, 2, ',', '.')}}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-danger btn-apagar" data-tbody=".Products" data-dados="{{json_encode(['id' => $variation->id])}}" data-route="{{route('registration.stock.product')}}"><i class="ri-delete-bin-5-line"></i></button>
                                                                <a href="{{route('registration.stock.product.edit', $variation->id)}}" class="btn btn-info"><i class="ri-edit-box-line"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

