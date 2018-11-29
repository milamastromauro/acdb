<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/novo.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Carrinho de Compra</title>
  </head>
  <body class="style_carrinho">
    @include('header')

    <div class="container config_container">
      <section> <!--
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
     </div> <-->
     <div class="row justify-content-between">
     <div class="carrinhodecompraclasse col-6 col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 ">
       <img src="{{ asset('/imagens/carrinho/carrinho_de_compra.png') }}" alt="carrinho_de_compra" height="100" width="180">
     </div>
     <div class="textoalinhadodireita col-6 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
    <button class="botao_continuar_comprando content-end" type="button" name="comprar">Continuar comprando</button>
     </div>
   </div>

    </section>

    <section>
      <div class="row justify-content-around fontetitulo">
      <div class="textocentralizado fundoelementoscarrinho border col-4 col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
        <b>Produtos</b>
      </div>
      <div class="textocentralizado fundoelementoscarrinho border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
      <b>Quantidade</b>
      </div>
      <div class="textocentral fundoelementoscarrinho border col-3 col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1">
        <b>Valor Unitário</b>
      </div>
      <div class="textocentralizado fundoelementoscarrinho border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        <b>Valor Total</b>
      </div>
    </div>
    </section>
    <section>
      <div class="row justify-content-around">
        <div class="fontetexto margin_prd border col-4 col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 div1">
          <img src="{{ asset('/imagens/produtos-categoria/conjunto_pink_frente.jpg') }}" alt="carrinho_de_compra" height="100" width="80">
         <span class="nome_prod">  Conjunto Terninho Pink - Calça e Blazer - Tam: M </span>
        </div>
      <div class="fontetexto textocentralizado margin_prd border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
        1
        </div>
      <div class="fontetexto textocentralizado margin_prd border col-3 col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 div1">
          R$ 450
        </div>
      <div class="fontetexto textocentralizado margin_prd border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
          R$ 450
        </div>
        <div class="fontetexto textocentralizado margin_prd border col-4 col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 div1">
          <img src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado.jpg') }}" alt="carrinho_de_compra" height="100" width="80">
          Vestido Geométrico - Tam: M
        </div>
      <div class="fontetexto textocentralizado margin_prd border col-3 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
        1
        </div>
      <div class="fontetexto textocentralizado margin_prd border col-3 col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 div1">
          R$ 260
        </div>
      <div class="fontetexto textocentralizado margin_prd border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 div1">
          R$ 260
        </div>
      </div>
      </section>
      <section>
      <div class="row">
      <div class="cep fontetitulo fundoelementoscarrinho border col-7 col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 div1">
          Digite seu CEP para calcular o valor e prazo de entrega: <br>

          <input type="text" placeholder="Digite aqui seu CEP" name="cep"/><button class="botao_config" type="submit" value="Calcular Frete"> Calcular Frete </button>
           <a href="http://www.buscacep.correios.com.br/servicos/dnec/index.do">Não sei meu CEP </a>
        </div>

        <div class="fontetitulo textoalinhadodireita textocentral fundoelementoscarrinho border col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
              <span class="valortotalprod">Valor total dos produtos:</span>
            </div>
          <div class="fontetitulo textoalinhadodireita textocentralizado border col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    R$ 710
              </div>
      </div>

        <div class="row justify-content-end">
    <div class="fontetitulo textoalinhadodireita border col-7 col-xs-7 col-sm-7 col-md-3 col-lg-3 col-xl-3 align-self-end">
              <b>Valor total do frete:</b>
            </div>
    <div class="fontetitulo textoalinhadodireita border col-5 col-xs-5 col-sm-5 col-md-2 col-lg-2 col-xl-2">
                  R$ 10
        </div>
    </div>
    </section>

    <section>
    <div class="row justify-content-end fontetitulo">
    <div class="textoalinhadodireita fundoelementoscarrinho border col-5 col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 align-self-end">
        <b>Cupom desconto:</b>
        <input class="textoalinhadodireita inputvalidar_cupom validar_cupom" type="text" placeholder="Digite seu Cupom" name="nomecupom"/><button class="botao_config validar_cupom" type="submit" value="Validar" name="validarcupom">Validar</button>
        </div>

    </div>
  </section>

  <section>
<div class="fontetitulo row justify-content-end">
<div class="textoalinhadodireita fundoelementoscarrinho border col-7 col-xs-7 col-sm-7 col-md-3 col-lg-3 col-xl-3 align-self-end">
      <b>Valor total:</b>
    </div>
<div class="textoalinhadodireita border col-5 col-xs-5 col-sm-5 col-md-2 col-lg-2 col-xl-2">
          R$ 720
    </div>
</div>
</section>

    <section>
      <div class="row justify-content-end">
        <div class="textoalinhadodireita col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">

            <button class="button_buy align-self-end" type="button" name="comprar"><b>COMPRAR</b></button>
        </div>
      </div>
    </section>

      </div>

  @include("footer")
  </body>
</html>
