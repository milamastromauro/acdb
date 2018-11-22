<?php
session_start();
$arquivo = 'buda.json';

function cadastro($user){
  global $arquivo;
  if($user['senha']!=$user['confirmar-senha']){
    return [
      'error'=>true,
      'id'=>false,
      'msg'=> "As senhas não conferem!"
    ];
  }
  if(file_exists($arquivo)){
    $dados = json_decode(file_get_contents($arquivo), true);
  }else{
    $dados = ["usuarios"=>[]];
  }

  foreach ($dados['usuarios'] as $id => $usuario) {
    if ($user['email'] == $usuario['email']) {
      return [
        'error'=>true,
        'id'=>$id,
        'msg'=> "Usuário já cadastrado!"
      ];
    }
  }
  $id = count($dados['usuarios']);
  unset($user['confirmar-senha']);
  $user['senha'] = password_hash($user['senha'], PASSWORD_DEFAULT);
  $dados['usuarios'][] = $user;
  file_put_contents($arquivo, json_encode($dados));
  return [
    'error'=>false,
    'id'=>$id,
    'msg'=> "Usuário cadastrado com sucesso!"
  ];
  /*
  recebe $user:
  [
    'nome' => "",
    'login' => "",
    'senha' => "",
    'confirmar-senha' => "",
    'acao' => ""
  ]
  retorna um array:
  [
    'error'=>bool,
    'id'=>(false ou posição na lista),
    'msg'=> "mensagem de erro"
  ]
  - verificar se as senhas são iguais
  - abrir um json se não existe criar com o seguinte formato:
    {"usuarios":[]}
  - verificar se já existe um usuário com o mesmo e-mail
  - caso não exista, inserir no JSON
  */
}

function login($login, $senha){
  global $arquivo;
  if(file_exists($arquivo)){
    $dados = json_decode(file_get_contents($arquivo), true);
  }else{
    $dados = ["usuarios"=>[]];
  }

  foreach ($dados['usuarios'] as $id => $usuario) {
    if ($login == $usuario['login'] && password_verify($senha, $usuario['senha'])) {
      $_SESSION['usuario'] = $usuario;
      $_SESSION['usuario']['id'] = $id;
      return true;
    }
  }
  return false;
}

function is_logged(){
  return isset($_SESSION['usuario']);
}

function get_user(){
  return isset($_SESSION['usuario'])?$_SESSION['usuario']:false;
}

function logout(){
  session_destroy();
}
?>
