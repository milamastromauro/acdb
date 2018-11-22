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


		<title>A Cabeça do Buda - Folha de estilos</title>
	</head>
	<body>

      @include('header')

		<section>
		<div class="container-fluid">
		<div id="carrosselHome" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="{{ asset('/imagens/banner1b.jpg') }}" alt="First slide">
	    </div>
	    <div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('/imagens/banner2b.jpg') }}" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="{{ asset('/imagens/banner3b.jpg') }}" alt="Third slide">
	    </div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('/imagens/banner4b.jpg') }}" alt="Third slide">
			</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<h1 class="destaques mt-4"><strong>Destaques</strong></h1><br>

<div id="produtosMenores" class="container">
	<div class="row">

		<div id="destaqueMenorHome1_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque1b.jpg" alt="Produto 1"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>

		<div id="destaqueMenorHome2_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque2b.jpg" alt="Produto 2"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>

		<div id="destaqueMenorHome3_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque3b.jpg" alt="Produto 3"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>

		<div id="destaqueMenorHome4_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque4b.jpg" alt="Produto 4"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>
	</div>
</div>

<div id="produtosMaiores_gp" class="container">
	<div class="row">
		<a href="#"><div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 destaques_prod destaqueMaior1_img"></a>
			<div class="txtMaiorHover1">CACILDS VIDRIS<br>LITRO ABERTIS</div>
	<!-- <img class="destaques_img2 mt-4" src="imagens/destaques/destaque5b.jpg" alt="Produto5"> -->
</div>
		<a href="#"><div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 destaques_prod destaqueMaior2_img"></a>
			<div class="txtMaiorHover2">CASAMENTIS FAZ<br>MALANDRIS<br>PIRULITÁ</div>
	<!-- <img class="destaques_img2 mt-4" src="imagens/destaques/destaque6b.jpg" alt="Produto6"> -->
		</div>
</div>
</div>


<div id="bannerInfraHome" class="container-fluid img-responsive mt-4">
	<div class="textoInfraHome text-left">Lorem ipsum dolor sit amet</div>
			<button type="button" class="botaoBannerInfra"><strong>OUTLET</strong></button>
</div>
</section>
@include('footer')
		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
  </html>
