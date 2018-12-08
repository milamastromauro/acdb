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
                        <h1>Produtos</h1>
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
                                          <div id="divcomprar" class="add-to-cart-btn">
                                              <button id="btncomprar" class="btn comprar" value="{{ $produto['produto_id'] }}">Comprar</button>
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

<script>
/*window.onload = function() {
*/
let comprar = document.getElementById('btncomprar');
let itensCart=document.getElementById('itensCart');
let comprar2 = document.getElementById('divcomprar');

console.log(itensCart.value);

comprar.onclick = function(){
	var request = new XMLHttpRequest();
	request.open('GET', 'carrinho/'+comprar.value, true);

	request.onload = function() {
	  if (request.status >= 200 && request.status < 400) {
	    // Deu certo
			comprar.innerHTML = "<div>Produto adicionado</div>";
			itensCart.innerHTML = parseInt(itensCart.textContent)+1;
			setTimeout(function(){
			comprar2.innerHTML = "<button id='btncomprar' class='btn comprar'>Comprar</button>"
		}, 1000);
	  } else {
	    // Deu erro
			let comprarErro = document.getElementById('btncomprar');
			let comprarErro2 = document.getElementById('divcomprar');
			comprarErro.onclick = function(){
				comprarErro.innerHTML = "<div>Ops! Tente de novo</div>";
				setTimeout(function(){
				comprarErro2.innerHTML = "<button id='btncomprar' class='btn comprar'>Comprar</button>"
			}, 5000);
			}

	  }
	};

	request.onerror = function() {
	  // There was a connection error of some sort
	};

	request.send();


}

</script>
						    @endsection
