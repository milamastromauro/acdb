<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- arquivos para o bootstrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="{{ asset('css/novo.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
    <header class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand p-3" href="index.html">
                <img src="{{asset('css/imagens/cabeca-buda-logo-2x.png')}}" alt="a cabeça do buda">
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
                    <div class="cart-area">
                            <a href="checkout.html"><i class="fas fa-user" aria-hidden="true"></i> <span>Login</span></a>
                    </div>
                    <!-- Carrinho -->
                    <div class="cart-area">
                            <a href="checkout.html"><i class="fas fa-shopping-bag" aria-hidden="true"></i> <span>3</span></a>
                    </div>
            </div>
        </nav>

    </header>
        <section>
        <div class="container-fluid fundoLogin">
        <div class="container">
        <div class="row">
            @yield('content')
        </div>

        </div>
        </div>
        </section>

        <footer id="rodape" class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="d-flex mt-5 mr-5 footer">
                        <!-- Logo -->
                        <div class="footer-logo">
                            <a href="#"><img src="{{asset('css/imagens/cabeca-buda-fundo-escuro-2x.png')}}" alt=""></a>
                        </div>
                        <!--  Menu primário-->
                        <div class="footer_menu_loja ml-5 mt-5">
                            <ul>
                                <li><a href="index.html">Loja</a></li>
                                <li><a href="cadastro.php">Cadastro</a></li>
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
    </body>

</html>