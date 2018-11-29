@extends('layouts.base')

@section('title', 'Produto')

@section('content')


			<div class="container">
				<div class="row justify-content-around ">
								<div class="col-3 col-xs-3 col-sm-3 col-md-6 col-lg-6 col-xl-6">
			      <img src="{{ asset('/imagens/produtos-categoria/vestido_geometrico_lado.jpg') }}" class="border_produto" id="modelo" alt="product-image" height="415" width="288" >
			    </div>

			    <div class="col-3 col-xs-3 col-sm-3 col-md-6 col-lg-6 col-xl-6 blocoproduto">
			       <h1>Vestido Geométrico</h1>
					 </br>
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
                <select class="size col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <option name= "tamanho" value="PP">PP</option>
                    <option name= "tamanho" value="P">P</option>
                    <option name= "tamanho" value="M">M</option>
                    <option name= "tamanho" value="G">G</option>
                    <option name= "tamanho" value="GG">GG</option>
                </select>

					<span class="position_name_d"> Cor </span>
                <select class="color col-4 col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
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
