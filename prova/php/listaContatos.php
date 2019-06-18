<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gugi|Nanum+Gothic" rel="stylesheet">
  </head>
  <body>
    <table border="1">
      <thead>
        <th>Nome</th>
        <th>Apelido</th>
        <th>E-mail</th>
        <th>Telefone</th>
      </thead>
      <tbody>
        <?php
        require_once "banco.php";
        $sql = "select nome, apelido, email, telefone FROM pessoas";

        foreach (getConnection()->query($sql) as $row) {
          echo "<tr>";
          echo "<td>".$row['nome']."</td>";
          echo "<td>".$row['apelido']."</td>";
          echo "<td>".$row['email']."</td>";
          echo "<td>".$row['telefone']."</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
