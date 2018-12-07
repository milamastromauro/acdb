@extends('layouts.base')

@section('title', 'Carrinho')

@section('content')

<div class="style_carrinho">

  <div class="container config_container">
    <section>
      <!--
      <div class="row">
      <div class="carrinhodecompraclasse col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 div1">
      <img src="{{ asset('/imagens/carrinho/carrinho_de_compra.png') }}" alt="carrinho_de_compra" height="100px" width="180px">
    </div>
  </div>
</section>
<section>
<div class="row justify-content-between">

<div class="textoalinhadodireita col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-end">
<button class="botao_config content-end" type="button" name="comprar">Continuar comprando</button>
</div>
</div> -->
<div class="row justify-content-around">
  <div class="carrinhodecompraclasse col-6 col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 ">
    <img src="{{ asset('/imagens/carrinho/carrinho_de_compra.png') }}" alt="carrinho_de_compra" height="100" width="180">
  </div>
  <div class="textoalinhadodireita col-6 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
    <button class="botao_continuar_comprando content-end" type="button" name="comprar">Continuar comprando</button>
  </div>
</div>


<section>
  <div class="row justify-content-around fontetitulo">
    <div class="textocentralizado fundoelementoscarrinho border col-4 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <b class="fonte_titulo_elementos">Produtos</b>
    </div>
    <div class="textocentralizado fundoelementoscarrinho border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
      <b class="fonte_titulo_elementos">Quantidade</b>
    </div>
    <div class="textocentralizado fundoelementoscarrinho border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
      <b class="fonte_titulo_elementos">Valor Unitário</b>
    </div>
    <div class="textocentralizado fundoelementoscarrinho border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
      <b class="fonte_titulo_elementos">Valor Total</b>
    </div>
  </div>
</section>
<section>

  <div class="row justify-content-around">
    @forelse($produtos as $produto)
    <div class="fontetexto margin_prd border col-4 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 div1">
      @if(isset($produto['produto_foto']))
      <img src="{{ $produto['produto_foto'] }}" alt="carrinho_de_compra" height="100" width="80">
      @else
      <img src="{{ asset('css/imagens/default.png') }}" alt="carrinho_de_compra" height="100" width="80">
      @endif
      <span class="nome_prod">  {{ $produto['produto_nome'] }} </span>
    </div>
    <div class="fontetexto textocentralizado margin_prd border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
      1
    </div>
    <div class="fontetexto textocentralizado margin_prd border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
      R$ {{ $produto['produto_valor'] }}
    </div>
    <div class="fontetexto textocentralizado margin_prd border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
      R$ {{ $produto['produto_valor'] }}
    </div>
    @empty
    Você não tem produtos no carrinho!
    @endforelse
  </div>
</section>
<section>
  <div class="row justify-content-around fontetitulo">
    <div class="cep textocentralizado fundoelementoscarrinho border col-4 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 div1">
      Digite seu CEP para calcular o valor e prazo de entrega: <br>

      <input class="textoalinhadodireita inputvalidar_cupom validar_cep" type="text" placeholder="Digite aqui seu CEP" name="cep"/><button class="botao_config" type="submit" value="Calcular Frete"> Calcular Frete </button>
      <a href="http://www.buscacep.correios.com.br/servicos/dnec/index.do">Não sei meu CEP </a>
    </div>
    <div class="fontetexto textocentralizado fundoelementoscarrinho border col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <b>Valor total do frete:</b>
    </div>
    <div class="fontetexto textocentralizado fundoelementoscarrinho border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
      R$ 10
    </div>
  </div>
</div>
</section>
<div class="container">
<section>
  <div class="row justify-content-end">
    <div class="fontetitulo textocentral fundoelementoscarrinho border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
      <span class="valortotalprod">Cupom desconto:</span></div>
      <div class="fontetitulo textocentralizado border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" style="padding: 0 3px;">
        <input class="inputvalidar_cupom validar_cupom" type="text" placeholder="Digite seu Cupom" name="nomecupom"/><button class="botao_config_2 validar_cupom button_valida" type="submit" value="Validar" name="validarcupom">Validar</button>
      </div>
    </div>
  </section>
  <section>
    <div class="row justify-content-end fontetitulo">
      <div class="fontetitulo textocentralizado fundoelementoscarrinho border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        <span class="valortotalprod">Valor total:</b>
        </div>
        <div class="fontetitulo textocentralizado border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
          R$ {{ $valorTotal }}
        </div>
      </div>
    </section>

    <section>
      <div class="row justify-content-end">
        <div class="fontetitulo fundoelementoscarrinho border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
          <span class="valortotalprod">Valor total dos produtos:</span></div>
          <div class="fontetitulo textocentralizado border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            R$ {{ $soma }}
          </div>
        </div>
      </section>
</div>

      <section>
        <div class="row justify-content-end">
          <div class="justify-content-end align-self-end textocentralizado col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <a href="checkout" class="button_cancel justify-content-end align-self-end"  name="comprar"><b>Limpar Carrinho</b></a>
          </div>
          <div class="justify-content-end align-self-end textocentralizado col-6 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <a href="checkout" class="button_buy justify-content-end align-self-end"  name="comprar"><b>COMPRAR</b></a>
          </div>
        </div>
      </section>
    </div>
  </section>

  @endsection
