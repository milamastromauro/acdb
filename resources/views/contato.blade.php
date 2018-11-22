<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="{{ asset('/css/novo.css') }}" rel="stylesheet">
		<title>A Cabeça do Buda - Camisetas</title>
	</head>
	<body id="pagina-categoria">
         @include('header')
    <!-- Fim da Header-->
    <div class="container-fluid">

    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <img class="imgcontato" src="{{ asset('/imagens/contato.jpg') }}" alt="">
        </div><!-- fim col-lg-08-->
        <div class="col-lg-5 margintopdez">
          <h1 class="topico"> Nossas Lojas - Guide Shop </h1>
          <br>
          <br>
          <br>
          <p class="para">Você pode retirar suas compras em qualquer um dos nossos Guide Shops. Os Pedidos chegam em até dois dias úteis e com frete grátis. Para escolher essa opção, é só marcar "Retirar no Guide Shop" na página de pagamento e selecionar o Guide Shop mais conveniente pra você.</p>
          <br>
          <br><b class="tituloinfos">ENDEREÇO: <i class="cardoso">Cardoso de  Melo,90</i></b>
          <br><b class="tituloinfos">TELEFONE: <i class="cardoso">+55 11 3333-3333</i></b>
        </div>


    </div><!-- fechando a row-->
</div>
<!-- RODAPÉ -->
@include('footer')

		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
  </html>
