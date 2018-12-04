@extends('layouts.base')

@section('title', 'A Cabeça do Buda')

@section('content')

	<body>

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

	@endsection
