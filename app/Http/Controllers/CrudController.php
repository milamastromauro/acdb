<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\http\request;
use Illuminate\Support\Facades\DB;
use App\Produto as Produto;
use App\Foto as Foto;

class CrudController extends Controller
{

    public function cadastraProdutos(Request $r){
        if ($r->isMethod('get')){
            return view('cadastraProdutos');
        }
        $produto = new Produto;
        $produto->nomeProduto = $r->inputNome;
        $produto->estoqueProduto = $r->inputEstoque;
        $produto->skuProduto = $r->inputSku;
        $produto->valorProduto = $r->inputPreco;
        $produto->valorDescontoProduto = $r->inputPrecoDesconto;
        $produto->descricaoProduto = $r->inputDescricao;

        

        $produto->dataCriacaoProduto = date("Y-m-d H:i:s");
        $produto->dataAlteracaoProduto = date("Y-m-d H:i:s");
        if (isset($r->destaque)){
            $produto->destaqueProduto = true;
        }
        $produto->save();

    //subindo a foto e colocando em uma tabela estrangeira
    $nameFile = null;
    if ($r->hasFile('uploadFoto') && $r->file('uploadFoto')->isValid()) {
        $name = $produto->idProduto."_".date("Ymd");
        $extension = $r->uploadFoto->extension();
        $nameFile = "{$name}.{$extension}";
        $upload = $r->file('uploadFoto')->move("uploadsprodutos", $nameFile);
        $foto = new Foto;
        $foto->Produto_idProduto = $produto->idProduto;
        $foto->localFoto = "uploadsprodutos/".$nameFile;
        $foto->save();
        if ( !$upload )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();
    }
    
        
        return view('cadastraprodutos',['resultado' => "cadastro efetuado com sucesso"]);
    }
    
}