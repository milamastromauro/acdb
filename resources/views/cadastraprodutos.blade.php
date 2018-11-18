@extends('layouts.baseadm')

@section('title', 'A Cabeça do Buda - Cadastro')

@section('content')
      
<section class="container-fluid fundoLogin">
    <div class="container">
        <div class="row">
            <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-4 col-xl-6 mt-5 mb-5">
                <form class="needs-validation" action="/acdb/public/cadastraprodutos" method="POST" enctype="multipart/form-data" novalidate>
                {!! csrf_field()!!}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome do produto</label>
                            <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome do produto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEstoque">Estoque</label>
                            <input type="text" class="form-control" id="inputEstoque" name="inputEstoque" placeholder="Quantidade em estoque">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPreco">Preço</label>
                            <input type="text" class="form-control" id="inputPreco" name="inputPreco" placeholder="Preço do produto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPrecoDesconto">Preço com desconto</label>
                            <input type="text" class="form-control" id="inputPrecoDesconto" name="inputPrecoDesconto" placeholder="Preço do produto com desconto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDescricao">Descrição</label>
                        <input type="text" class="form-control" id="inputDescricao" name="inputDescricao" placeholder="Descrição do produto">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="uploadFoto">Foto do produto</label>
                            <input type="file" class="form-control-file" id="uploadFoto" name="uploadFoto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSku">SKU</label>
                            <input type="text" class="form-control" id="inputSku" name="inputSku" placeholder="SKU do produto">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="destaque">
                        <label class="form-check-label" for="gridCheck">
                            Produto destaque?
                        </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>

        <div class="retorno">@isset($resultado)
            <br>
            <div class="alert alert-primary" role="alert">
            {{$resultado}}
            </div>
        @endisset</div>

        </div>
    </div>
</section>
@endsection