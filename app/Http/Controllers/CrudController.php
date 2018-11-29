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

    public function cadastraProdutos($id=0, Request $r){
        if ($r->isMethod('get')){
            //sendo get sem id, é cadastro novo
            if($id==0){
                return view('cadastraProdutos', ['insert' => 1]);
            }
            else{
                //tendo id, é pedido de update de um produto existente
                $produto = Produto::find($id);
                //$produtos = Produto::all();
                    $fotos = $produto->Fotos()->get();
                    foreach($fotos as $foto){
                        $lista = array('produto_id'=>$produto->idProduto,
                        'produto_nome'=>$produto->nomeProduto,
                        'produto_valor'=>$produto->valorProduto,
                        'produto_desconto'=>$produto->valorDescontoProduto,
                        'produto_descricao'=>$produto->descricaoProduto,
                        'produto_destaque'=>$produto->destaqueProduto,
                        'produto_estoque'=>$produto->estoqueProduto,
                        'produto_sku'=>$produto->skuProduto,
                        //fazendo galeria no futuro, puxar array de fotos e setar qual é destaque
                        'foto'=>$foto->localFoto);
                        
                    }
                    return view('cadastraProdutos',
                    ['produto' => $lista ]);
                }
            }

        // é post!
        if ($id == 0) { // é insert!
            $produto = new Produto;
        } else { // é update!
            $produto = Produto::find($id);
        }
            
        //$produto = new Produto;
        $produto->nomeProduto = $r->inputNome;
        $produto->estoqueProduto = $r->inputEstoque;
        $produto->skuProduto = $r->inputSku;
        $produto->valorProduto = $r->inputPreco;
        $produto->valorDescontoProduto = $r->inputPrecoDesconto;
        $produto->descricaoProduto = $r->inputDescricao;   
        if ($id==1) $produto->dataCriacaoProduto = date("Y-m-d H:i:s");
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
    else{
        if (isset($lista['foto'])){
            //se não foi enviada nenhuma foto nova, mantém a foto que já estava na array
            $foto->Produto_idProduto = $produto->idProduto;
            $foto->localFoto = $lista['foto'];
            $foto->save(); 
        }
    }
     
        // return view('cadastraprodutos',['resultado' => "cadastro efetuado com sucesso"]);
        return redirect('/listaprodutos');
    }

    public function apagaProduto($id=0, Request $r){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect('/listaprodutos');
    }

    public function listaProdutos(Request $r){
        if ($r->isMethod('get')){
            //modifica para também pegar por categoria
            //precisa colocar a categoria no cadastro
            //cria classe
            //procura exemplo que passa parametro da roda - id
            //faz a query e entrega array filtrada pra view
            $produtos = Produto::all();
            foreach($produtos as $produto){
                
            $produtos = Produto::all();
            foreach($produtos as $produto){
                $fotos = $produto->Fotos()->get();
                if (isset($fotos)){
                    foreach($fotos as $foto){
                        $lista[] = array('produto_id'=>$produto->idProduto,
                    'produto_nome'=>$produto->nomeProduto,
                    'produto_valor'=>$produto->valorProduto,
                    'foto'=>$foto->localFoto);
                    }
                }
                
                    // $lista[] = array('produto_id'=>$produto->idProduto,
                    // 'produto_nome'=>$produto->nomeProduto,
                    // 'produto_valor'=>$produto->valorProduto);
                
                }
            }
        }

            return view('categoria',
            ['produtos'=>$lista]);
            // var_dump($lista);
    }

    public function listaProdutosAdm(Request $r){
        $lista = [];
        if ($r->isMethod('get')){
            $produtos = Produto::all();
            foreach($produtos as $produto){
                $fotos = $produto->Fotos()->get();
                if (isset($fotos)){
                    foreach($fotos as $foto){
                        $lista[] = array('produto_id'=>$produto->idProduto,
                    'produto_nome'=>$produto->nomeProduto,
                    'produto_valor'=>$produto->valorProduto,
                    'foto'=>$foto->localFoto);
                    }
                }
                
                    // $lista[] = array('produto_id'=>$produto->idProduto,
                    // 'produto_nome'=>$produto->nomeProduto,
                    // 'produto_valor'=>$produto->valorProduto);
                
            }
        }
        return view('listaprodutos',
            ['produtos'=>$lista]);
            //  var_dump($lista);
    }
    
}