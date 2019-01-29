@extends('layouts.base')

@section('title', 'A Cabeça do Buda')

@section('content')

	<body>

		<div class="container-fluid">
		<div id="carrosselHome" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="{{ asset('/imagens/banner1b.jpg') }}" alt="First slide">
				<label class="texto_car1">DRESs </br> TIME</label>
	    </div>
	    <div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('/imagens/banner2b.jpg') }}" alt="Second slide">
				<label class="texto_car2">SAPATOS </br>  &</br> TÊNIS</label>
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="{{ asset('/imagens/banner3b.jpg') }}" alt="Third slide">
				<label class="texto_car3">camisetas</label>
	    </div>
			<div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('/imagens/banner4b.jpg') }}" alt="Third slide">
				<label class="texto_car4">man </br>collection</label>
			</div>
	  </div>
	  <a class="carousel-control-prev" href="#carrosselHome" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carrosselHome" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<h1 class="destaques mt-4"><strong>Destaques</strong></h1><br>

<div class="col-12 col-md-8 col-lg-12">
                    <div class="shop_grid_product_area">
                      <div class="row">
                      @forelse ($produtos as $produto)
                        <!-- inicio prod -->
                        <div class="col-12 col-sm-6 col-lg-3 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
                                    @if(isset($produto['foto']))
									<img src="{{$produto['foto']}}" alt="">
                                    @else
                                    <img src="{{ asset('css/imagens/default.png') }}" alt="">
                                    @endif
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>{{$produto['produto_nome']}}</h6>
                                        </a>
                                        <p class="preco">R${{$produto['produto_valor']}},00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="carrinho/{{$produto['produto_id']}}" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
							<!-- fim produto -->
                      @empty
                        sem
										@endforelse
</div></div></div>

<div id="produtosMaiores_gp" class="container">
	<div class="row">
		<a href="#"><div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 destaques_prod destaqueMaior1_img"></a>
			<div class="txtMaiorHover1">ACESSÓRIOS</div>
	<!-- <img class="destaques_img2 mt-4" src="imagens/destaques/destaque5b.jpg" alt="Produto5"> -->
</div>
		<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 destaques_prod destaqueMaior2_img">
			<a class="sem_und" href="/acdb/public/produto"><div class="txtMaiorHover2 sem_und">VESTIDO GEO<br>NEW<br>COLLECTION</div></a>
	<!-- <img class="destaques_img2 mt-4" src="imagens/destaques/destaque6b.jpg" alt="Produto6"> -->
		</div>
</div>
</div>


<div id="bannerInfraHome" class="container-fluid img-responsive mt-4">
	<div class="textoInfraHome text-left">coleção cápsula Primavera/Verão</div>
			<button type="button" class="botaoBannerInfra" onclick="window.location.href='produto'"><strong>+ Colors</strong></button>
</div>

	@endsection
