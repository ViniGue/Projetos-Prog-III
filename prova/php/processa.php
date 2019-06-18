<?php

  require_once "banco.php";

  $nome = $_GET['nome'];
  if (empty($nome)) {
    die("Nome obrigatório");
  }

  $apelido = $_GET['apelido'];

  $email = $_GET['email'];
  if (empty($nome)) {
    die("Nome obrigatório");
  }

  $telefone = $_GET['telefone'];
  if (empty($nome)) {
    die("Nome obrigatório");
  }

  if (isset($_GET['concordo'])){
    $concordo = $_GET['concordo'];
  }else{
    die("Você precisa aceitar os termos para se cadastrar...");
  }

  try{
  $sql = "INSERT INTO pessoas (nome, apelido, email, telefone) VALUES (:nome, :apelido, :email, :telefone)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':apelido', $apelido);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':telefone', $telefone);
  if ($stmt->execute())
    echo "Cadastro Realizado";
  else
    echo "Falha no Cadastro";

}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}

?>
