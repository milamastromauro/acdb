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
		<title>A Cabeça do Buda - Leva uma aí!</title>
	</head>
	<body>
	@include('header')

		<section>
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
	</section>



 @include('footer')
		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
  </html>
