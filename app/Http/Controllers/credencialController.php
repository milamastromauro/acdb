<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\http\request;
use Illuminate\Support\Facades\DB;
use App\Cliente as Cliente;

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
            //var_dump($usuario);
            if($usuario->senhaCliente == $s->input('senha')){
                return view('login', ['respostalogin' => "login correto"]);
            }
            else return view('login', ['respostalogin' => "login incorreto"]);
        }
    }

    public function cadastro(Request $r){
        if ($r->isMethod('get')){
            return view('cadastro');
        }
        //falta comparar senha e confirmação e fazer persistência de dados
        //falta separar nome principal e sobrenome
        $cliente = new Cliente;
        $cliente->nomeCliente = $r->nome;
        $cliente->emailCliente = $r->email;
        $cliente->senhaCliente = $r->senha;
        $cliente->cpfCliente = $r->cpf;
        $cliente->dataCriacaoCliente = date("Y-m-d H:i:s");
        $cliente->dataCriacaoCliente = date("Y-m-d H:i:s");

        $cliente->save();

        return view('cadastro',['resultado' => "cadastro efetuado com sucesso"]);
    }
    
}