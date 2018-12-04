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
