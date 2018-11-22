<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href='../../public/css/novo.css' rel="stylesheet">
		<title>A Cabeça do Buda - Folha de estilos</title>
	</head>
	<body>
		<header class="header_area">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand p-3" href="#">
					<img src="imagens/cabeca-buda-logo-2x.png" alt="a cabeça do buda">
				</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoMenu">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse ml-5" id="conteudoMenu">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.html">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="categoria.html">Masculino</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="categoria.html">Feminino</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="contato.html">Contato</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
			          Opções
			        </a>
			        <div class="dropdown-menu">
			          <a class="dropdown-item" href="#">Página 1</a>
			          <a class="dropdown-item" href="#">Página 2</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Página 3</a>
			        </div>
			      </li>
			    </ul>
			  </div>
				<!-- Seção da direita -->
				<div class="header-meta d-flex clearfix justify-content-end">
						<!-- Search Area -->
						<div class="search-area">
								<form action="#" method="post">
										<input type="search" name="search" id="headerSearch" placeholder="Pesquisar">
										<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
						</div>
						<!-- Área de login -->
						<div class="user-login-info">
								<a href="login.html"><i class="fas fa-user" aria-hidden="true"></i><span>Login</span></a>
						</div>
						<!-- Carrinho -->
						<div class="cart-area">
								<a href="checkout.html"><i class="fas fa-shopping-bag" aria-hidden="true"></i> <span>3</span></a>
						</div>
				</div>
			</nav>

    </header>

		<section>
		<div class="container-fluid">
		<div id="carrosselHome" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="imagens/banner1b.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="imagens/banner2b.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="imagens/banner3b.jpg" alt="Third slide">
	    </div>
			<div class="carousel-item">
				<img class="d-block w-100" src="imagens/banner4b.jpg" alt="Third slide">
			</div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<h1 class="destaques mt-4"><strong>Destaques</strong></h1><br>

<div id="produtosMenores" class="container">
	<div class="row">

		<div id="destaqueMenorHome1_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque1b.jpg" alt="Produto 1"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>

		<div id="destaqueMenorHome2_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque2b.jpg" alt="Produto 2"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>

		<div id="destaqueMenorHome3_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque3b.jpg" alt="Produto 3"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>

		<div id="destaqueMenorHome4_gp" class="destaques_prod mt-4 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
			<!-- <img class="destaques_img mt-4" src="imagens/destaques/destaque4b.jpg" alt="Produto 4"><br> -->
			<a href="#"><button type="button" class="botaoMenorHome1"><strong>VEJA MAIS</strong></button></a>
		</div>
	</div>
</div>

<div id="produtosMaiores_gp" class="container">
	<div class="row">
		<a href="#"><div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 destaques_prod destaqueMaior1_img"></a>
			<div class="txtMaiorHover1">CACILDS VIDRIS<br>LITRO ABERTIS</div>
	<!-- <img class="destaques_img2 mt-4" src="imagens/destaques/destaque5b.jpg" alt="Produto5"> -->
</div>
		<a href="#"><div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4 destaques_prod destaqueMaior2_img"></a>
			<div class="txtMaiorHover2">CASAMENTIS FAZ<br>MALANDRIS<br>PIRULITÁ</div>
	<!-- <img class="destaques_img2 mt-4" src="imagens/destaques/destaque6b.jpg" alt="Produto6"> -->
		</div>
</div>
</div>


<div id="bannerInfraHome" class="container-fluid img-responsive mt-4">
	<div class="textoInfraHome text-left">Lorem ipsum dolor sit amet</div>
			<button type="button" class="botaoBannerInfra"><strong>OUTLET</strong></button>
</div>
</section>

<footer id="rodape" class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="d-flex mt-5 mr-5 footer">
                        <!-- Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="imagens/cabeca-buda-fundo-escuro-2x.png" alt=""></a>
                        </div>
                        <!--  Menu primário-->
                        <div class="footer_menu_loja ml-5 mt-5">
                            <ul>
                                <li><a href="index.html">Loja</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="contato.html">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Menu secundário -->
                <div class="menu-secundario col-12 col-md-6">
                    <div class="">
                        <ul class="footer_menu mt-5">
                            <li><a href="#">Entrega</a></li>
                            <li><a href="#">Política de privacidade</a></li>
                            <li><a href="#">Termos de uso</a></li>
                        </ul>
                    </div>
                </div>
            </div>

          <div class="col-md-12 text-center direitos mt-5 pb-4">
              <p class="direitos">Copyright © Todos os direitos reservados | feito por budinhas</p>
        	</div>
    </footer>

		<!-- SCRIPTS DE JS PARA O BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
  </html>
