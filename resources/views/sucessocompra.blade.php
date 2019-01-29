@extends('layouts.base')

@section('title', 'Categoria de Produtos')

@section('content')

	<div id="pagina-categoria">
        <section class="area_titulo">
			<div class="area_titulo align-middle">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="page-title text-center">
                                    <h1>Pedido Realizado com Sucesso</h1>
                                </div>
                            </div>
                        </div>
            </div>
    	</div>
		</section>

		
		<section class="loja">
            <div class="container">
                    <div class="col-12 col-md-8 col-lg-12">

                          <div class="alert alert-success mb-4" role="alert">
                            Parabéns, logo você terá um produto do budinha em suas mãos!<br>
                            @isset($pedido)
                                <div><b>Data do Pedido:</b> {{$pedido->dataPedido}}</div>
                                <div><b>Valor total do pedido: </b>R$ {{$pedido->valorPedido}}</div>
                                @endisset
                            </div>
                                
                                <h2>Produtos</h2>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Valor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                @forelse ($produtos as $produto)
                                <tr>
                                    <th scope="row">{{$produto['produto_id']}}</th>
                                    <td>{{$produto['produto_nome']}}</td>
                                    <td>R$ {{$produto['produto_valor']}}</td>
                                </tr>
                                @empty
                                sem produtos
                                @endforelse
                                </tbody>
                                </table>  

                    </div>
            </div>
        </section>



	</div>	
    @endsection

