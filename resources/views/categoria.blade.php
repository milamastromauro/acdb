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
		<section class="area_titulo">
			<div class="area_titulo align-middle">
				<div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h1>Camisetas</h1>
                    </div>
                </div>
            </div>
        </div>
    	</div>
		</section>

		<!-- SECAO DE CATEGORIAS -->
		<section class="loja">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="loja_sidebar_area">
                        <div class="categoria mb-50">
                            <h6 class="titulo-sidebar mb-30">Categorias</h6>
                            <div class="categorias">
                                <ul class="menu-categorias">
                                    <li><a href="#">Todos</a></li>
                                    <li><a href="#">Camisetas</a></li>
                                    <li><a href="#">Vestidos</a></li>
                                    <li><a href="#">Bermudas</a></li>
                                    <li><a href="#">Saias</a></li>
                                    <li><a href="#">Jeans</a></li>
                                    <li><a href="#">Tênis</a></li>
                                    <li><a href="#">Acessórios</a></li>
                                    <li><a href="#">Blusas</a></li>
                                  </ul>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                      <div class="row">

                            <!-- inicio prod -->
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
																			<img src="{{ asset('/imagens/produtos-categoria/body_produto18_zoom.jpg') }}" alt="">
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>Vestido extreme</h6>
                                        </a>
                                        <p class="preco">R$255,00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="checkout.html" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
														<!-- fim produto -->
														<!-- inicio prod -->
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
																			<img src="{{ asset('/imagens/produtos-categoria/camiseta_gun_produto11_frente_b.jpg') }}" alt="">
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>Camiseta do buda</h6>
                                        </a>
                                        <p class="preco">R$55,00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="checkout.html" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
														<!-- fim produto -->
														<!-- inicio prod -->
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
																			<img src="{{ asset('/imagens/produtos-categoria/camiseta_lion_produto12_zoom.jpg') }}" alt="">
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>Camiseta do buda</h6>
                                        </a>
                                        <p class="preco">R$55,00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="checkout.html" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
														<!-- fim produto -->
														<!-- inicio prod -->
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
																			 <img src="{{ asset('/imagens/produtos-categoria/camiseta_logo.jpg') }}" alt="">
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>Camiseta branca</h6>
                                        </a>
                                        <p class="preco">R$155,00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="checkout.html" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
														<!-- fim produto -->
														<!-- inicio prod -->
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
																			<img src="{{ asset('/imagens/produtos-categoria/conjunto_pink_frente.jpg') }}" alt="">
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>Conjunto pink</h6>
                                        </a>
                                        <p class="preco">R$455,00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="checkout.html" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
														<!-- fim produto -->
														<!-- inicio prod -->
                            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
																			<img src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado.jpg') }}" alt="">
                                    </div>
                                    <!-- Descricao -->
                                    <div class="descricao mt-1">
                                        <a href="#">
                                            <h6>Vestido geométrico lado</h6>
                                        </a>
                                        <p class="preco">R$255,00</p>
                                          <!-- Comprar -->
                                          <div class="add-to-cart-btn">
                                              <a href="checkout.html" class="btn comprar">Comprar</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
														<!-- fim produto -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<!-- RODAPÉ -->

		@include('footer')

		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js></script>
  </body>
  </html>
