@extends('layouts.base')

@section('title', 'Produto')

@section('content')


			<div class="container">
				<div class="row">
								<div class="align-items-center col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			      <img src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado.jpg') }}" class="border_produto align-items-center" id="modelo" alt="product-image" height="415" width="288">
			    	</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 blocoproduto">
								<h1 class="titulo_produto_2">Vestido Geométrico</h1>
							<h5> R$ 320</h5>
						</br>
							<div>
							<span class="titulo_produto"> Descrição </span>
						</br>
							<span></br>Vestido Geométrico Branco/Vermelho/Amarelo/Preto, possui estampa em formas geométrica e sobreposição em tela. Mangas com ombro à mostra.
							Confeccionado em 48% Acrílico, 48% Viscose e 4% Elastano. <span>
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
							 <button class="conclude" type="submit">COMPRAR</button>
			    </div>
			  </div>

			</div>
		</div>

@endsection
