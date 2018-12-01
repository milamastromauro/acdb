@extends('layouts.base')

@section('title', 'Categoria de Produtos')

@section('content')

      <div class="container-fluid backbanner"></div>
      <div class="col align-self-start checktitulo">
          <span class="pcheckout"> CheckOut </span> </div>


    <div class="container clearboth checkoutwrapper">
    <div class="row">
      <section class="end_estilo col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 teste2 primdiv">
      <p class="end_estilo row2">Endereço e Informações de Cobrança</p>
      <form action="check.html" method="post">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">Nome  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="nome">
      <div class="invalid-feedback">
        campo obrigatório
      </div>
     </div>
    <div class="end_estilo col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">Sobrenome  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="sobrenome">
      <div class="invalid-feedback">
        campo obrigatório
      </div>
    </div>

      <div class="teste2 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3 form-group">
        <label for="cpfcnpj">CPF/CNPJ</label>
          <select class="form-control" id="cpfcnpj" name="cpfcnpj">
            <option selected name="pessoafisicaCliente" value="0">CPF</option>
            <option name="pessoajuridicaCliente" value="1">CNPJ</option>
          </select>
          <div class="invalid-feedback">
            campo obrigatório
          </div>
      </div>

      <div class="teste2 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3 form-group">
         <label for="cpf_cnpj">CPF/CNPJ</label>
         <input type="text" class="form-control" id="registroCpfCnpj" name="cpf_cnpj" placeholder="CPF/CNPJ (somente números)" required>
            <div class="invalid-feedback">
                       campo obrigatório
              </div>
      </div>


    <div style="clear:both" class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="endereco_cad">Endereço  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="endereco_cad">
      <div class="invalid-feedback">
        campo obrigatório
      </div> </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="complemento_end">Complemento(casa,apto) <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="complemento_end">
       <div class="invalid-feedback">
        campo obrigatório
      </div>
    </div>
    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
      <label for="cep_end">CEP  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="cep_end">
      <div class="invalid-feedback">
        campo obrigatório
      </div>
     </div>

    <div class="form-group teste2 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
      <label for="nome">Cidade  <span class="asterisco"> * </span> </label>   <br>
      <input type="text" class="col-12">
      <div class="invalid-feedback">
        campo obrigatório
      </div>
      </div>

    <div class="form-group teste2 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
      <label for="estado">Estado<span class="asterisco"> * </span></label>
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

    <div style="clear:both" class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
      <label for="nome">E-mail  <span class="asterisco"> * </span></label>   <br>
      <input type="text"  class="col-12" id="email_end">
      <div class="invalid-feedback">
        campo obrigatório
      </div>
     </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 form-group">
        <label for="registroSenha">Senha</label>
        <input type="password" class="form-control" id="registroSenha" name="senha" placeholder="Mínimo de 8 dígitos" required>
      </div>
      <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
        <label for="registroSenhaConf">Confirme sua Senha</label>
        <input type="password" class="form-control required" id="registroSenhaConf" name="senha_confirmation" placeholder="Digite novamente sua senha" required>
        @isset($msg_senha)
        {{  $msg_senha  }}
        @endisset
        <div class="invalid-feedback">
          campo obrigatório
        </div>
      </div>


    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3 mt-3">
    <input type="checkbox" name="aceitar" value="aceitar">
     <label for="aceitar">Aceito os termos e condições de compra</label>
     </div>
   </form>
    </section>



    <section class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 row4">
          <div class="end">
            <span>Seu pedido</span>
        <br>
      <span class="detalhesrow"> Detalhes </span>
        <br>
        <br>
        <div class="infospedido row">
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 teste2"> Produto </p>
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3 teste2"> Preço </p>
          </div>

        <div class="infospedido2">
                  <img src="{{ asset('/imagens/produtos-categoria/conjunto_pink_frente.jpg') }}" alt="carrinho_de_compra" height="100" width="80">
                <span class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> Camiseta Gun </span>
                <span class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 82.00 </span>
            </div>

          <div class="infospedido2">
                <img src="{{ asset('/imagens/produtos-categoria/conjunto_pink_frente.jpg') }}" alt="carrinho_de_compra" height="100" width="80">
                  <span class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> Vestido Estampado </span>
                  <span class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 50.00 </span>
              </div>

            <div class="infospedido2">
                    <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> Entrega <br> CEP 05555-55 </p>
                    <span class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 20.00 </span>

                </div>

<br>
<br>
<br>
<br>

      </div>

      <div class="end clearboth">
        <div class="infospedido row">
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> TOTAL </p>
              <p class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3"> R$ 152.00 </p>
            </div>
              </div>
              <br>
              <br>
      <p class="end col-xs-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 mb-3"> FORMA DE PAGAMENTO </p>
      <div class="clearboth ffubuntu">
        <input type="radio" name="metodopagamento" value="boleto" id="boleto">
        <label for="boleto"  class="margemlateral"> Boleto </label>

        <input type="radio" name="metodopagamento" value="cartaodecredito" id="cartaodecredito">
        <label for="cartaodecredito"> Cartão de Crédito </label>

        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
          <label for="numero_cartao">Número do Cartão de Crédito  <span class="asterisco"> * </span></label>   <br>
          <input type="text"  class="col-8" id="numero_cartao">
          <div class="invalid-feedback">
            campo obrigatório
          </div> </div>
          <div class="teste2 form-group col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
            <label for="vencimento_cartao">Vencimento  <span class="asterisco"> * </span></label>   <br>
            <input type="text"  class="col-4" id="nvencimento_cartao">
            <div class="invalid-feedback">
              campo obrigatório
            </div> </div>
            <div class="teste2 form-group col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
              <label for="cod_seg_cartao">Cód. Segurança  <span class="asterisco"> * </span></label>   <br>
              <input type="text"  class="col-4" id="cod_seg_cartao">
              <div class="invalid-feedback">
                campo obrigatório
              </div> </div>

       </div>
       <div>
         <br>
         <button type="button" name="button" class="botaocomprar">Comprar</button>
       </div>
       <div class="retorno">@isset($resultado)
           <br>
           <div class="alert alert-primary" role="alert">
           {{$resultado}}
           </div>
       @endisset</div>
   </div>
 </div>

  	    @endsection
