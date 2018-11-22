<?php session_start();
error_reporting(1);
?>
@include('funcoes')
@include('acoes')
<header class="header_area">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand p-3" href="/">
					<img src="{{ asset('/imagens/cabeca-buda-logo-2x.png') }}" alt="a cabeça do buda">
				</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoMenu">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse ml-5" id="conteudoMenu">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="index.blade.php">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="/categoria">Masculino</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="/categoria">Feminino</a>
			      </li>
						<li class="nav-item">
			        <a class="nav-link" href="contato.blade.php">Contato</a>
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
  						<?php if (is_logged()) { ?>
                            <div class="user-login-info">
								<i class="fas fa-user" aria-hidden="true"></i><span> Olá,	<?php echo $_SESSION['usuario']['nome']; ?>				</span>
							</div>
							<div class="user-login-info">
								<a href="includes/acoes.php?acao=logout" class="fas fa-power-off" aria-hidden="true"><span>Sair</span></a>
							</div>

						<?php } else { ?>
					    <div class="user-login-info">
									<a href="login.php"><i class="fas fa-user" aria-hidden="true"></i><span>Login</span></a>
							</div>
						<?php } ?>

						<!-- Carrinho -->
						<div class="cart-area">
								<a href="checkout.html"><i class="fas fa-shopping-bag" aria-hidden="true"></i> <span>3</span></a>
						</div>
				</div>
			</nav>

    </header>
