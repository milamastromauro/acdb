@extends('layouts.base')

@section('title', 'Categoria de Produtos')

@section('content')

	<div id="pagina-categoria">
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
                      @forelse ($produtos as $produto)
                        <!-- inicio prod -->
                        <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                <div class="single-product-wrapper">
                                    <!-- Imagem do produto -->
                                    <div class="product-img">
									<img src="{{$produto['foto']}}" alt="">
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
						    @endsection
