<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.base')

@section('title', 'A Cabeça do Buda - Cadastro')

@section('content')
      
<section class="container-fluid fundoLogin">
	  <div class="container">
	    <div class="row">
        <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-6 offset-lg-4 col-xl-6 mt-5 mb-5">
                <form class="needs-validation" action="/acdb/public/cadastro" method="POST" novalidate>
                {!! csrf_field()!!}
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="registroNome">Nome</label>
				      <input type="text" class="form-control" id="registroNome" name="nome" placeholder="Informe seu nome completo" required>
							<div class="invalid-feedback">
			          campo obrigatório
                    </div>         
				    </div>
						<div class="form-group col-md-6">
				      <label for="registroEmail">E-mail</label>
				      <input type="email" class="form-control" id="registroEmail" name="email" placeholder="E-mail" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="registroSenha">Senha</label>
				      <input type="password" class="form-control" id="registroSenha" name="senha" placeholder="Crie uma senha" required>
				    </div>
						<div class="form-group col-md-6">
				      <label for="registroSenhaConf">Confirme sua Senha</label>
				      <input type="password" class="form-control required" id="registroSenhaConf" name="confirmar-senha" placeholder="Digite novamente sua senha" required>
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>

				  </div>
				  <div class="form-group">
				    <label for="endereco">Endereço</label>
				    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
						<div class="invalid-feedback">
							campo obrigatório
						</div>
				  </div>
				  <div class="form-group">
				    <label for="complemento">Complemento</label>
				    <input type="text" class="form-control" id="inputAddress2" name="complemento" placeholder="Complemento">
						<div class="invalid-feedback">
							campo obrigatório
						</div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="cidade">Cidade</label>
				      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
							<div class="invalid-feedback">
			          campo obrigatório
			        </div>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="estado">Estado</label>
				      <select id="estado" class="form-control" name="estado" required>
				        <option selected>Escolha...</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
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
@endsection