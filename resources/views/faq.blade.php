@extends('layouts.base')

@section('title', 'FAQ')

@section('content')

	<body>

				<div class="container-fluid backbanner"></div>
	      <div class="col align-self-start checktitulo">
	          <span class="pcheckout"> PERGUNTAS FREQUENTES </span> </div>
				</section>

			<section>
				<div class="blocoperguntas col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
        <div>
				<a class="btn btn-primary fundo_faqs" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
   <span>Os produtos são exclusivos?</span>
  </a>
<div class="collapse" id="collapseExample1">
  <div class="card card-body">
   Sim, 100% exclusivos. Vendemos apenas pelo canal online, sendo 100% confeccionado por nós, com qualidade e muito carinho para vocês.
  </div>
</div>
			</div>
		</div>


		<div class="blocoperguntas col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
		<div>
					<a class="btn btn-primary fundo_faqs" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
			    <span>Quais são as políticas de reembolso do site?</span>
			  	</a>
								<div class="collapse" id="collapseExample2">
				  				<div class="card card-body">
				  Para reembolso, somente no caso de perda durante entrega, ou por defeito confirmado mediante análise do SAC. (Necessita devolução do produto para análise)
				        	</div>
								</div>
							</div>
						</div>

		<div class="blocoperguntas col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
		<div>
			<a class="btn btn-primary fundo_faqs" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
			<span>E se meu pedido não chegar no prazo?</span>
			</a>
			<div class="collapse" id="collapseExample3">
				<div class="card card-body">
       Você deverá informar o site, que em um prazo de 4 dias entraremos em contato para solucionarmos a questão.
				</div>
			</div>
		</div>
		</div>

		<div class="blocoperguntas col-10 col-xs-10 col-sm-10 col-md-11 col-lg-11 col-xl-11">
		<div>
			<a class="btn btn-primary fundo_faqs" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
			<span>Existe garantia de produtos?</span>
			</a>
			<div class="collapse" id="collapseExample4">
				<div class="card card-body">Sim. 30 dias sob as condições de que não seja detectado mau uso.
						Somente o primeiro frete de retorno é reembolsado pela loja online. </br>A partir do segundo, o frete é de responsabilidade do cliente quando envia um produto de volta, para verificar a garantia.
				</div>
			</div>
		</div>
		</div>

	@endsection
