<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\http\request;
use Illuminate\Support\Facades\DB;
use App\Cliente as Cliente;
use App\Produto as Produto;
use App\Pedido as Pedido;
use App\Item as Item;

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
        //se tem carrinho
        if (null !== ($r->session()->get('carrinho'))){
            //se tem seção
            if (null !== ($r->session()->get('nome'))){

                //salva no banco pedido, atrelado ao usuário
                //encaminha para página de sucesso (ainda precisa construir)
            $pedido = new Pedido;
            $pedido->dataPedido = date("Y-m-d H:i:s");
            $pedido->Cliente_idCliente = session()->get('idcliente');
            $pedido->valorPedido = session()->get('soma');
            $pedido->Pagamento_idPagamento = 1;
            $pedido->StatusPedido_idStatusPedido = 1;
            $pedido->Entrega_idEntrega = 1;
            $pedido->save();

            $produtos = $r->session()->get('carrinho');
            foreach($produtos as $produto){
                $item = new Item;
                $item->Pedido_idPedido = $pedido->idPedido;
                $item->Carrinho_idCarrinho = 0;
                $item->Produto_idProduto = $produto['produto_valor'];
                $item->save();
            }

            $nomecliente = $r->session()->get('nome');

            $r->session()->forget('carrinho');
            $r->session()->forget('qtdcarrinho');
            $r->session()->forget('soma');
            //se for mostrar os dados no sucesso, mover esses forget para esse controller

            return view('sucessocompra',['pedido' => $pedido,
            'produtos' => $produtos]);



            }
            else {
                return redirect('cadastro');
            }
        }
        else {
            return redirect('/');
        }
    }

    public function limparCarrinho(Request $r){
      $r->session()->forget('carrinho');
      $r->session()->forget('soma');
      $r->session()->forget('valor_total');
      $r->session()->forget('qtdcarrinho');
      return redirect('vercarrinho');
    }

    public function removerCarrinho(Request $r,$id){
        $lista = $r->session()->get('carrinho');
        foreach($lista as $key=>$produto){
            if($produto['produto_id'] == $id){
              unset($lista[$key]);
            }
        }
        return redirect()->back();
      }

}
