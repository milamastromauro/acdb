<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\http\request;
use Illuminate\Support\Facades\DB;
use App\Cliente as Cliente;
use App\Produto as Produto;

class CarrinhoController extends Controller
{
    public function AdicionaCarrinho($id, Request $r){
        $produto = Produto::find($id);
        $lista = [];
        $carrinho = $r->session()->get('carrinho');

        //esquema para soma
        $soma = $r->session()->get('soma');
        if (isset($soma)) $soma+=$produto->valorProduto;
        else $soma=$produto->valorProduto;

        //var_dump($carrinho);
        if (isset($carrinho)) $lista = $carrinho;

        $foto = $produto->Fotos()->first();
        if (isset($foto)){
            $arrayproduto = ['produto_id'=>$produto->idProduto,
            'produto_nome'=>$produto->nomeProduto,
            'produto_valor'=>$produto->valorProduto,
            'produto_foto'=>$foto->localFoto];
        }
        else{
            $arrayproduto = ['produto_id'=>$produto->idProduto,
            'produto_nome'=>$produto->nomeProduto,
            'produto_valor'=>$produto->valorProduto];
        }
        array_push($lista, $arrayproduto);
        //var_dump($lista);





        $r->session()->put('carrinho',$lista);
        $r->session()->put('qtdcarrinho',count($lista));
        $r->session()->put('soma',$soma);
         //$r->session()->flush();
         return redirect('vercarrinho');
    }

    public function VisualizaCarrinho(Request $r){
        $produtos = $r->session()->get('carrinho');
        if(!isset($produtos)){
          $produtos = [];
        }
        $soma = $r->session()->get('soma');
        $valorTotal = $soma+10;
        // var_dump($produtos);
        // exit;
        // var_dump($soma);
        return view('carrinho', ['produtos'=>$produtos, 'soma'=>$soma, 'valorTotal'=>$valorTotal]);
    }

    public function checkout(Request $r){
        //se tem seção
        if (null !== ($r->session()->get('nome'))){
            //salva no banco pedido, atrelado ao usuário
            //encaminha para página de sucesso (ainda precisa construir)
        }
        else {
            return redirect('cadastro');
        }
    }

    public function limparCarrinho(Request $r){
      $r->session()->get('carrinho');
      $r->session()->forget('produto_id');
    }

}
