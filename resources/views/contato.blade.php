@extends('layouts.base')

@section('title', 'Contato')

@section('content')


	<body id="pagina-categoria">

    <div class="container-fluid">

    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-7">
          <img class="imgcontato" src="{{ asset('/imagens/contato.jpg') }}" alt="">
        </div>
        <div class="col-lg-5 margintopdez">
					<div class="topico">
          <h1> Nossas Lojas - Guide Shop </h1>
				</div>
					<div class="para">
          <span>Você pode retirar suas compras em qualquer um dos nossos Guide Shops. </br> Os Pedidos chegam em até dois dias úteis e com frete grátis. Para escolher essa opção, é só marcar "Retirar no Guide Shop" na página de pagamento e selecionar o Guide Shop mais conveniente pra você.</span>
				</div>
					<div class="infos_loja_contato">
          <span class="tituloinfos">ENDEREÇO:<i class="cardoso">Avenida Dr. Cardoso de Melo,90</i></span>
          <span class="tituloinfos">TELEFONE:<i class="cardoso">+55 11 3333-3333</i></span>
					</div>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="460" height="320" id="gmap_canvas" src="https://maps.google.com/maps?q=dr%20cardoso%20de%20melo%2C%2090%20-%20Brazil%20-%20S%C3%A3o%20Paulo%2C%20SP&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webdesign-muenster/"></a></div><style>.mapouter{text-align:right;height:297px;width:499px;}.gmap_canvas {overflow:hidden;background:none!important;height:297px;width:499px;}</style></div>
				</div>
        </div>


    </div><!-- fechando a row-->
</div>


@endsection
