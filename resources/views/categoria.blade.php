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
                                    <li><a href="/acdb/public/categoria">Todos</a></li>
                                    @forelse ($categorias as $categoria)
                                    <li><a href="/acdb/public/categoria/{{$categoria->idCategoria}}">{{$categoria->nomeCategoria}}</a></li>
                                    @empty
                                    sem
                                    @endforelse
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
                                        <p class="preco">R${{$produto['produto_valor']}}</p>
                                          <!-- Comprar -->
                                          <div id="divcomprar" class="add-to-cart-btn">
                                              <button id="btncomprar" class="btn comprar" value="{{ $produto['produto_id'] }}">Comprar</button>
																						<div id='sucess' style="display:none">Produto adicionado</div>
                                          </div>
                                    </div>
                                </div>
                            </div>
							<!-- fim produto -->
                      @empty
                        Desculpe, não temos produtos para essa categoria
                    @endforelse

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<script>
/*window.onload = function() {
*/
let btnComprar = document.getElementsByTagName('button');
//let comprar = document.getElementById('btncomprar');

let itensCart=document.getElementById('itensCart');
//let comprar2 = document.getElementById('divcomprar');


console.log(itensCart.value);

for(let i=0;i<btnComprar.length;i++){
	if(btnComprar[i].className == 'btn comprar'){
		btnComprar[i].addEventListener('click',function(){
			addProduto(btnComprar[i])})
	}
}

function addProduto(comprar){
	//console.log(comprar.parentNode)
	let parent = comprar.parentNode
	var request = new XMLHttpRequest();
	request.open('GET', 'carrinho/'+comprar.value, true);

	request.onload = function() {
	  if (request.status >= 200 && request.status < 400) {
	    // Deu certo
				//parent.firstElementChild.innerHTML =  '<div>Produto adicionado</div>'
		parent.lastElementChild.style.display = 'block';
		comprar.style.display = 'none'
		itensCart.innerHTML = parseInt(itensCart.textContent)+1;
		 	setTimeout(function(){
		 		//parent.firstElementChild.innerHTML = "<button id='btncomprar' value='"+comprar.value+"' class='btn comprar'>Comprar</button>"
		// 	delete window.comprar;
		parent.lastElementChild.style.display = 'none';
		comprar.style.display = 'block'

		 }, 1000);
	  } else {
	    // Deu erro
			let comprarErro = document.getElementById('btncomprar');
			let comprarErro2 = document.getElementById('divcomprar');
			comprarErro.onclick = function(){
				comprarErro.innerHTML = "<div>Ops! Tente de novo</div>";
				setTimeout(function(){
				comprarErro2.innerHTML = "<button id='btncomprar' value='"+comprar.value+"' class='btn comprar'>Comprar</button>"
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
