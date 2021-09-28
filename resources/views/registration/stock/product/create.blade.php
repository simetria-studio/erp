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
                            <form action="{{route('registration.stock.product')}}" method="post">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="company_id">Empresa <span class="text-danger">*</span></label>
                                        <select name="company_id" class="form-control @error('company_id') is-invalid @enderror">
                                            <option value="">Selecione uma Opção</option>
                                            @foreach ($companies as $company)
                                                <option value="{{$company->id}}" {{old('company_id') == $company->id ? ' selected' : ''}}>{{$company->corporate_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('company_id')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
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
                                                <input name="product_name" type="text" value="{{old('product_name')}}" class="form-control @error('product_name') is-invalid @enderror" placeholder="Nome do Produto">
                                                @error('product_name')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="sku">Codigo (SKU)</label>
                                                <input name="sku" value="{{old('sku')}}" type="text" class="form-control" placeholder="Codigo do Produto">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="product_type">Tipo de Produto</label>
                                                <select name="product_type" id="product_type" class="form-control">
                                                    <option value="P" {{old('product_type') == 'P' ? 'selected' : ''}}>Produto</option>
                                                    <option value="S" {{old('product_type') == 'S' ? 'selected' : ''}}>Serviço</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="sales_format">Formato de Venda</label>
                                                <select name="sales_format" id="sales_format" class="form-control">
                                                    <option value="S" {{old('sales_format') == 'S' ? 'selected' : ''}}>Simples</option>
                                                    <option value="CV" {{old('sales_format') == 'CV' ? 'selected' : ''}}>Com Variação</option>
                                                    {{-- <option value="CC" {{old('sales_format') == 'CC' ? 'selected' : ''}}>Com Composição</option> --}}
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="unit_dimension">Unidade de Medida</label>
                                                <select name="unit_dimension" class="form-control">
                                                    <option value="QT" {{old('unit_dimension') == 'QT' ? 'selected' : ''}}>Quantidade (qt)</option>
                                                    <option value="UN" {{old('unit_dimension') == 'UN' ? 'selected' : ''}}>Unidade (Un)</option>
                                                    <option value="M" {{old('unit_dimension') == 'M' ? 'selected' : ''}}>Metro (m)</option>
                                                    <option value="M²" {{old('unit_dimension') == 'M²' ? 'selected' : ''}}>Metro Quadrado (m²)</option>
                                                    <option value="KG" {{old('unit_dimension') == 'KG' ? 'selected' : ''}}>Kilograma (Kg)</option>
                                                    <option value="G" {{old('unit_dimension') == 'G' ? 'selected' : ''}}>Grama (g)</option>
                                                    <option value="L" {{old('unit_dimension') == 'L' ? 'selected' : ''}}>Litros (L)</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3 sale-price">
                                                <label for="sale_price">Preço de Venda R$</label>
                                                <input name="sale_price" value="{{old('sale_price')}}" type="text" class="form-control" placeholder="Preço de Venda">
                                            </div>
                                        </div>

                                        <div class="row caracteristicas">
                                            <div class="form-group col-12"><h4>Caracteristicas</h4></div>
        
                                            <div class="form-group col-12 col-md-12">
                                                <label for="liquid_weight">Peso Liquido</label>
                                                <input name="liquid_weight" type="text" value="{{old('liquid_weight')}}" class="form-control" placeholder="Peso Liquido">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="gross_weight">Peso Bruto</label>
                                                <input name="gross_weight" value="{{old('gross_weight')}}" type="text" class="form-control" placeholder="Peso Bruto">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="items_box">Itens p/ Caixa</label>
                                                <input name="items_box" value="{{old('items_box')}}" type="text" class="form-control" placeholder="Itens p/ Caixa">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="width">Largura</label>
                                                <input name="width" value="{{old('width')}}" type="text" class="form-control" placeholder="Largura">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="height">Altura</label>
                                                <input name="height" value="{{old('height')}}" type="text" class="form-control" placeholder="Itens p/ Caixa">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="depth">Profundidade</label>
                                                <input name="depth" value="{{old('depth')}}" type="text" class="form-control" placeholder="Itens p/ Caixa">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="measure">Medida</label>
                                                <select name="measure" id="measure" class="form-control">
                                                    <option value="M" {{old('measure') == 'M' ? 'selected' : ''}}>Metros</option>
                                                    <option value="C" {{old('measure') == 'C' ? 'selected' : ''}}>Centímetro</option>
                                                    <option value="MM" {{old('measure') == 'MM' ? 'selected' : ''}}>Milímetro</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3 sale-price">
                                                <label for="gtin_ean">GTIN/EAN</label>
                                                <input name="gtin_ean" value="{{old('gtin_ean')}}" type="text" class="form-control" placeholder="GTIN/EAN">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="production">Produção</label>
                                                <select name="production" id="production" class="form-control">
                                                    <option value="P" {{old('production') == 'P' ? 'selected' : ''}}>Própria</option>
                                                    <option value="T" {{old('production') == 'T' ? 'selected' : ''}}>Terceiros</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="condition">Condição</label>
                                                <select name="condition" id="condition" class="form-control">
                                                    <option value="N" {{old('condition') == 'N' ? 'selected' : ''}}>Novo</option>
                                                    <option value="U" {{old('condition') == 'U' ? 'selected' : ''}}>Usado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="estoque-justify" role="tabpanel" aria-labelledby="estoque-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12"><h4>Estoque</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="stock_min">Minimo</label>
                                                <input name="stock_min" type="text" value="{{old('stock_min')}}" class="form-control" placeholder="Minimo">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="stock_max">Maximo</label>
                                                <input name="stock_max" value="{{old('stock_max')}}" type="text" class="form-control" placeholder="Maximo">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-12"><h4>Saldo em Estoque Inicial</h4></div>

                                            <div class="form-group col-12 col-md-3">
                                                <label for="deposit">Depositos</label>
                                                <select name="deposit" class="form-control">
                                                    @foreach ($companies as $company)
                                                        @foreach ($company->deposits as $deposit)
                                                            <option value="{{$deposit->id}}">{{$deposit->id}} - {{$deposit->name}}</option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="quantity">Quantidade</label>
                                                <input name="quantity" type="text" value="{{old('quantity')}}" class="form-control" placeholder="Quantidade">
                                            </div>
                                            <div class="form-group col-12 col-md-3">
                                                <label for="purchase_price">Preço de Compra Unitário R$</label>
                                                <input name="purchase_price" value="{{old('purchase_price')}}" type="text" class="form-control" placeholder="Preço de Compra Unitário">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="fornecedores-justify" role="tabpanel" aria-labelledby="fornecedores-tab-justify">
                                        <div class="row">
                                            <div class="form-group col-12 col-md-4">
                                                <label for="client_supplier">Fornecedor</label>
                                                <div class="input-group">
                                                    <select name="client_supplier" id="client_supplier" class="form-control">
                                                        @foreach ($companies as $company)
                                                            @foreach ($company->clientSuppliers as $clientSupplier)
                                                                <option value="{{$clientSupplier->id}}" data-dados="{{$clientSupplier}}">{{$clientSupplier->id}} - {{$clientSupplier->corporate_name}}</option>
                                                            @endforeach
                                                        @endforeach
                                                    </select>
                                                    <div class="input-group-append">
                                                        <button type="button" class="btn btn-success btn-add-fornecedor"><i class="ri-add-fill"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="fornecedores"></div>
                                    </div>
                                    <div class="tab-pane fade" id="tributacao-justify" role="tabpanel" aria-labelledby="tributacao-tab-justify">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="tab-pane fade" id="variacoes-justify" role="tabpanel" aria-labelledby="variacoes-tab-justify">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="tab-pane fade" id="imagens-justify" role="tabpanel" aria-labelledby="imagens-tab-justify">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                    <div class="tab-pane fade" id="informacaoAdicional-justify" role="tabpanel" aria-labelledby="informacaoAdicional-tab-justify">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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

