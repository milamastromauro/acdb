<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="{{ asset('/css/novo.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu|Poppins" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body class="checkout">
    @include('header')

    <header>
      <div class="container-fluid backbanner"></div>
      <div class="col align-self-start checktitulo">
          <p class="pcheckout"> CheckOut </p> </div>
      </div>
    </header>

    <div class="container clearboth checkoutwrapper">
    <div class="row">
      <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 teste2 primdiv">
      <p class="end row2">Endereço e Informações de Cobrança</p>
      <form action="check.html" method="post">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">Nome  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">Sobrenome  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">Endereço  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">Número(casa,apto) <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">CEP  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="teste2 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
      <label for="nome">Cidade  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="teste2 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
      <label for="nome">Estado <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">E-mail  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">  </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-3">
    <input type="checkbox" name="aceitar" value="aceitar">
     <label for="aceitar">Aceito os termos e condições de compra</label>
     </div>
   </form>
    </section>



    <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row4">
          <div class="end">
            <span>Seu pedido</span>
        <br>
      <span class="detalhesrow"> Detalhes </span>
        <br>
        <br>
        <div class="infospedido row">
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 teste2"> Produto </p>
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 teste2"> Preço </p>
          </div>

        <div class="infospedido2">

                <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> Camiseta Gun </p>
                <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 82.00 </p>
            </div>

          <div class="infospedido2">
                  <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> Vestido Estampado </p>
                  <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 50.00 </p>
              </div>

            <div class="infospedido2">
                    <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> Entrega <br> CEP 05555-55 </p>
                    <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 20.00 </p>

                </div>

<br>
<br>
<br>
<br>

      </div>

      <div class="end clearboth">
        <div class="infospedido row">
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> TOTAL </p>
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 152.00 </p>
            </div>
              </div>
              <br>
              <br>
      <p class="end col-xs-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 mb-3"> FORMA DE PAGAMENTO </p>
      <div class="clearboth ffubuntu">
        <input type="radio" name="metodopagamento" value="boleto" id="boleto">
        <label for="boleto"  class="margemlateral"> Boleto </label>

        <input type="radio" name="metodopagamento" value="cartaodecredito" id="cartaodecredito">
        <label for="cartaodecredito"> Cartão de Crédito </label>

       </div>
       <div>
         <br>
         <button type="button" name="button" class="botaocomprar">Comprar</button>
       </div>
    </section>

  </div>
</div>

  @include("footer")

  </body>
</html>
