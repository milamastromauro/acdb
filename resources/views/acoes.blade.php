<?php
include_once('funcoes.blade.php');
if(isset($_REQUEST['acao'])) {
switch ($_REQUEST['acao']) {
  case 'login':
    if(login($_POST['login'], $_POST['senha'])){
      header('Location:index.php');
    }else{
      header('Location:index.php?page=login&msg=Usuário+não+encontrado+ou senha+inválida!');
    }
    break;

  case 'cadastro':
    unset($_POST['acao']);
    $cad = cadastro($_POST);
    if($cad['error']){
      header('Location:cadastro.php?page=cadastro&msg='.$cad['msg']);
    }else{
      header('Location:cadastro.php?page=login&msg='.$cad['msg']);
    }
    break;

  case 'logout':
    logout();
    header('Location:index.php');
    break;

  default:
    echo "Rota inválida!";
    break;
}
}
