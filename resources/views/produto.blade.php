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
        <div class="container-fluid" id="present">
					<img src="{{ asset('/imagens/product-template.png') }}" id="modelo" alt="product-image">
        <div class="container-fluid" id="about">
        <div class="container-fluid" id="descritivo">
            <h1 id="name-produto">Product Name</h1>
            <h4>R$ X</h4>
            <p id="description-produto"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id blandit metus. Curabitur eu fermentum augue, vitae iaculis est. Sed posuere posuere placerat. Phasellus faucibus lorem ipsum, quis ullamcorper risus hendrerit eget. Nunc pellentesque consequat nibh pellentesque vulputate. Cras convallis porttitor velit at aliquet. Maecenas vel auctor mi.
            </p>
            <form>
            <span>
                <select class="size">
                    <option name= "tamanho" value="PP">PP</option>
                    <option name= "tamanho" value="P">P</option>
                    <option name= "tamanho" value="M">M</option>
                    <option name= "tamanho" value="G">G</option>
                    <option name= "tamanho" value="GG">GG</option>
                </select>
            </span>
            <span>
                <select class="color">
                    <option name="cor" value="color-1">Cor 1</option>
                    <option name="cor" value="color-2">Cor 2</option>
                    <option name="cor" value="color-3">Cor 3</option>
                </select>
            </span>
            <span>
                <button class="conclude" type="submit"><input type="hidden" name="id0001">COMPRAR!</button>
            </span>
            </form>
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
