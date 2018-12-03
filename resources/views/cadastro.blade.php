<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.base')

@section('title', 'A Cabeça do Buda - Cadastro')

@section('content')

<section class="container-fluid fundoLogin">
	  <div class="container">
	    <div class="row">
        <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-4 col-xl-6 mt-5 mb-5">
          @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
              <strong>Xi, Budinha! Seu cadastro deu ruim</strong>
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
            </div>
            @endif
          <form class="needs-validation" action="/acdb/public/cadastro" method="POST" novalidate>
						{!! csrf_field()!!}
						<div id="formcadastro" class="form-row">
							<div class="form-group col-md-6">
								<label for="registroNome">Nome</label>
								<input type="text" class="form-control" id="registroNome" name="nome" placeholder="Nome" required>
								<div class="invalid-feedback">
									campo obrigatório
							</div>
						</div>

								<div class="form-group col-md-6">
									<label for="registroSobrenome">Sobrenome</label>
									<input type="text" class="form-control" id="registroSobrenome" name="sobrenome" placeholder="Sobrenome" required>
									<div class="invalid-feedback">
										campo obrigatório
												</div>
								</div>

									<div class="form-group col-md-3">
										<label for="cpfcnpj">CPF/CNPJ</label>
										<select class="form-control" id="cpfcnpj" name="cpfcnpj">
										<option selected name="pessoafisicaCliente" value="0">CPF</option>
										<option name="pessoajuridicaCliente" value="1">CNPJ</option>
										</select>
										<div class="invalid-feedback">
											campo obrigatório
										</div>
									</div>

									<div class="form-group col-md-9">
											<label for="cpf_cnpj">CPF/CNPJ</label>
											<input type="text" class="form-control" id="registroCpfCnpj" name="cpf_cnpj" placeholder="CPF/CNPJ (somente números)" required>
											<div class="invalid-feedback">
												campo obrigatório
														</div>
										</div>



							<div class="form-group col-md-6">
								<label for="registroEmail">E-mail</label>
								<input type="email" class="form-control" id="registroEmail" name="emailCliente" placeholder="E-mail" required>
								<div class="invalid-feedback">
									campo obrigatório
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="registroSenha">Senha</label>
								<input type="password" class="form-control" id="registroSenha" name="senha" placeholder="Mínimo de 8 dígitos" required>
							</div>
							<div class="form-group col-md-6">
								<label for="registroSenhaConf">Confirme sua Senha</label>
								<input type="password" class="form-control required" id="registroSenhaConf" name="senha_confirmation" placeholder="Digite novamente sua senha" required>
								@isset($msg_senha)
								{{  $msg_senha  }}
								@endisset
								<div class="invalid-feedback">
									campo obrigatório
								</div>
							</div>

						<!-- </div> -->
						<div class="form-group col-md-4">
							<label for="data_nasc">Data de Nascimento</label>
							<input type="date" class="form-control" id="data_nasc" name="data_nasc" maxlength="10" placeholder="DD/MM/AAAA" required>
							<div class="invalid-feedback">
								campo obrigatório
							</div>
						</div>

						<div class="form-group col-md-2">
							<label for="genero">Gênero</label>
							<select class="form-control" id="genero" name="genero" required>
								<option selected class="genmasc" id="genmasc" name="genmasc" value="M">M</option>
								<option class="genmfem" id="genfem" name="genmfem" value="F">F</option>
								<option class="genoutro" id="genoutro" name="genoutro" value="Outro">Outro</option>
							</select>
							<div class="invalid-feedback">
								campo obrigatório
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="endereco">Endereço</label>
							<input type="text" class="form-control" id="inputAddress" name="endereco" placeholder="Endereco">
							<div class="invalid-feedback">
								campo obrigatório
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="complemento">Complemento</label>
							<input type="text" class="form-control" id="inputAddress2" name="complemento" placeholder="Complemento">
							<div class="invalid-feedback">
								campo obrigatório
							</div>
						</div>
						</div>
						<div class="form-row">

							<div class="form-group col-md-5">
								<label for="estado">Estado</label>
								<select id="estado" class="form-control" name="estado" required>
								</select>
								<div class="invalid-feedback">
									campo obrigatório
								</div>
							</div>

							<div class="form-group col-md-5">
								<label for="cidade">Cidade</label>
								<select class="form-control" id="cidade" name="cidade" required>
								</select>
								<div class="invalid-feedback">
									campo obrigatório
								</div>
							</div>

							<div class="form-group col-md-2">
								<label for="cep">Cep</label>
								<input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" required>
								<div class="invalid-feedback">
									campo obrigatório
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="checktermos" name="termos" required>
								<label class="form-check-label" for="checktermos">
									<div class="invalid-feedback">
										campo obrigatório
									</div>
									Aceito os termos de uso
								</label>
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary">Cadastrar</button>
				</form>
				<div class="retorno">@isset($resultado)
            <br>
            <div class="alert alert-primary" role="alert">
            {{$resultado}}
            </div>
        @endisset</div>
    </div>
  </div>

  </div>
</section>

<script>
	var request = new XMLHttpRequest();
	request.open('GET', 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' , true);

	request.onload = function() {
		if (request.status >= 200 && request.status < 400) {
		// Success!
		var data = JSON.parse(request.responseText);
		let select = document.getElementById('estado');
		let teste;
		for(let estado of data){
			// console.log(estado);
		teste += "<option id='"+estado.nome+"'value='"+estado.id+"'>"+estado.nome+"</option>";
		select.innerHTML = teste;
		}} else {
		// We reached our target server, but it returned an error
		alert('error');
		}};

	request.onerror = function() {
	// There was a connection error of some sort
	};

	request.send();

window.onload = function() {

	var estado = document.getElementById('estado');
	var cidade = document.getElementById('cidade');

	estado.onchange = function(){
		var request = new XMLHttpRequest();
		request.open('GET', 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/'+estado.selectedOptions[0].value+'/municipios', true);
		request.onload = function() {
			if (request.status >= 200 && request.status < 400) {
			// Success!
			var data = JSON.parse(request.responseText);
			let teste;
			// console.log(estado.selectedOptions)
			for(let estado of data){
				// console.log(estado.nome);
			teste += "<option value='"+estado.nome+"'>"+estado.nome+"</option>";
			cidade.innerHTML = teste;
			}} else {
			// We reached our target server, but it returned an error
			alert('error');
			}};

			request.onerror = function() {
			// There was a connection error of some sort
			};

			request.send();
	}

	//Máscara da data de Nascimento
	var datanasc = document.getElementById('data_nasc');
	console.log(datanasc);

				datanasc.onkeyup = function mascaraData(){
						if (datanasc.value.length == 2){
							datanasc.value = datanasc.value + '/';

						return true;
						}
						if (datanasc.value.length == 5){
						datanasc.value = datanasc.value + '/';
						return true;
						}
					}
				}
</script>
@endsection
