@extends('layouts.base')

@section('title', 'Carrinho')

@section('content')

<div id="carrinho">
		<section class="area_titulo">
			<div class="area_titulo align-middle">
				<div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h1>Carrinho de compras</h1>
                    </div>
                </div>
            </div>
        </div>
    	</div>
    </section>

    <section>
      <div class="container">
      <div class="text-right">
      <a class="btn btn-outline-info my-4 pull-right" name="limpar" href="limparcarrinho">Limpar carrinho</a>
        <a class="btn btn-outline-info my-4 pull-right" name="continuar" href="categoria">Continuar comprando</a>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor Unitário</th>
            <th scope="col">Valor Total</th>
          </tr>
        </thead>
        <tbody>
          @forelse($produtos as $produto)
          <tr>
            <th scope="row">@if(isset($produto['produto_foto']))
      <img class="mr-2" src="{{ $produto['produto_foto'] }}" alt="carrinho_de_compra" height="70px">
      @else
      <img src="{{ asset('css/imagens/default.png') }}" alt="carrinho_de_compra" height="70px">
      @endif</th>
            <td>{{ $produto['produto_nome'] }}</td>
            <td>1</td>
            <td>R$ {{ $produto['produto_valor'] }}</td>
            <td>R$ {{ $produto['produto_valor'] }}</td>
          </tr>
          @empty
    Você não tem produtos no carrinho!
    @endforelse
        </tbody>
        <tfoot>
    <tr>
      <td>Frete</td>
      <td></td>
      <td></td>
      <td></td>
      <td>R$ 10</td>
    </tr>
    <tr class="table-info">
      <td>Valor total da compra</td>
      <td></td>
      <td></td>
      <td></td>
      <td>R$ {{ $valorTotal }}</td>
    </tr>
  </tfoot>
  </table>



   <div class="text-right">
      <a class="btn btn-info btn-lg px-5 py-2 my-4" href="checkout" name="comprar">Finalizar compra agora</a>
      </div>

      </div>

 

    </section>

  

</div>


  @endsection
