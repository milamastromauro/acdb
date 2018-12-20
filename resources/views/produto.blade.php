@extends('layouts.base')

@section('title', 'Produto')

@section('content')


			<div class="container">
				<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


		<div id="carrossel_produto" class="carousel slide alt_prodt" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carrossel_produto" data-slide-to="0" class="active"></li>
    <li data-target="#carrossel_produto" data-slide-to="1"></li>
    <li data-target="#carrossel_produto" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner alt_prodt">
    <div class="carousel-item active alt_prodt">
      <img class="d-block w-100 h-100" src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado.jpg') }}" alt="Primeiro Slide">
    </div>
    <div class="carousel-item alt_prodt">
      <img class="d-block w-100 h-100" src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado_3_c.jpg') }}" alt="Segundo Slide">
    </div>
    <div class="carousel-item alt_prodt">
      <img class="d-block w-100 h-100" src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado_2_d.jpg') }}" alt="Terceiro Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carrossel_produto" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carrossel_produto" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
</div>
								<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 blocoproduto">
									<ul class="menuzinho_produto_ul">
									<li class="menuzinho_produto"> <a href="http://localhost/acdb/public/index">Cabeça do Buda</a> </li>
									<li class="menuzinho_produto"> <a href="http://localhost/acdb/public/categoria">Vestidos </a></li>
									<li class="menuzinho_produto"> <a href="http://localhost/acdb/public/produto"> VESTIDO GEOMÉTRICO </a></li>
								</ul>
								<h1 class="titulo_produto_2">VESTIDO GEOMÉTRICO</h1>
							<h5 class="titulo_produto_2"><i> R$ 320</i></h5>
							<h6 class="titulo_produto_2"> 2X de R$ 160 </h6>
						</br>
							<div>
							<span class="titulo_produto"> Descrição </span>

							<span class="fonts_produto"></br>Vestido Geométrico Branco/Vermelho/Amarelo/Preto,
								possui estampa em formas geométricas e sobreposição em tela. Mangas com ombro à mostra.
							</br></br>
							<span class="titulo_produto"> Composição </span>
							</br>
							<span class="fonts_produto">Confeccionado em 48% Acrílico, 48% Viscose e 4% Elastano. <span>
							</div></br>
								<div class="row justify-content-around" id="descritivo">
									
          	<span class="position_name_d"> Tamanho </span>
                <select class="size col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <option name= "tamanho" value="PP">PP</option>
                    <option name= "tamanho" value="P">P</option>
                    <option name= "tamanho" value="M">M</option>
                    <option name= "tamanho" value="G">G</option>
                    <option name= "tamanho" value="GG">GG</option>
                </select>

					<span class="position_name_d"> Cor </span>
                <select class="color col-2 col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <option name="cor" value="color-1">Cor 1</option>
                    <option name="cor" value="color-2">Cor 2</option>
                    <option name="cor" value="color-3">Cor 3</option>
                </select>
            </span>
			    </div>
					<button class="conclude" type="submit">COMPRAR</button>
			  </div>

			</div>
		</div>

@endsection
