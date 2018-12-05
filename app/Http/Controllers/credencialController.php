<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\http\request;
use Illuminate\Support\Facades\DB;
use App\Cliente as Cliente;
use App\Endereco as Endereco;
use Validator;
use Illuminate\Support\MessageBag;

class CredencialController extends Controller
{

    public function login(Request $s){
        if ($s->isMethod('get')){
            return view('login');
        }
        else
        {
            $mail = $s->input('email');
            $usuario = Cliente::where('emailCliente', '=', $mail)->first();

            $nome = $usuario->nomeCliente;
            $adm = $usuario->admin;
            $s->session()->put('nome', $nome);
            $s->session()->put('adm', $adm);
            $nomeCliente = $s->session()->get('nome');

            $lembrar = $s->input('form-check-input');
            if(isset($lembrar)) {
            $s->session()->put('email', 'senha');
            }

            if($usuario->senhaCliente == password_verify($s->input('senha'), $usuario->senhaCliente)){
                return view('login', ['respostalogin' => "login correto", 'nomeCliente' => $nomeCliente]);
            }
            else return view('login', ['respostalogin' => "login incorreto"]);
        }
    }

    public function logout(Request $req){
      if($req->isMethod('get')){
        $req->session()->flush();
        return redirect('index');
      }
    }

    public function cadastro(Request $r){
        if ($r->isMethod('get')){
            return view('cadastro');
        }
        //falta comparar senha e confirmação e fazer persistência de dados

        $validator = Validator::make($r->all(), [
          'nome' => 'required',
          'sobrenome' => 'required',
          'emailCliente' => 'email|required|unique:cliente',
          'senha' => 'required|min:8|confirmed',
          'endereco' => 'required',
          'cidade' => 'required',
          'estado' => 'required',
          'cep' => 'required',
          'termos' => 'accepted'
        ]);

        if ($validator->fails()) {
          return redirect('cadastro')
                        ->withErrors($validator)
                        ->withInput();
        exit;
        }


        $cliente = new Cliente;
        $cliente->nomeCliente = $r->nome;
        $cliente->sobrenomeCliente = $r->sobrenome;
        $cliente->emailCliente = $r->emailCliente;
        $cliente->senhaCliente = password_hash($r->senha, PASSWORD_DEFAULT);
        $cliente->pessoajuridicaCliente = $r->cpfcnpj;
          if($r->cpfcnpj==1){
        $cliente->cnpjCliente = $r->cpf_cnpj;
          } else {
        $cliente->cpfCliente = $r->cpf_cnpj;
          }
        $cliente->Data_Nascimento = $r->data_nasc;
        $cliente->Genero = $r->genero;
        $cliente->dataCriacaoCliente = date("Y-m-d H:i:s");
        $cliente->dataCriacaoCliente = date("Y-m-d H:i:s");
        $cliente->save();

        $endereco = new Endereco;
        $endereco->Cliente_idCLiente = $cliente->idCliente;
        $endereco->enderecoCliente = $r->endereco;
        $endereco->complementoEndereco = $r->complemento;
        $endereco->Estado = $r->query('id');
        $endereco->Cidade = $r->cidade;
        $endereco->Cep = $r->cep;
        $endereco->save();





        return view('cadastro',['resultado' => "cadastro efetuado com sucesso"]);
    }

}
