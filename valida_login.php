<?php
if (!empty($_POST) and (empty($_POST['login']) or empty($_POST['senha']))) {
  header("Location: login.php");
  exit;
}
$link = new PDO('mysql:localhost;dbname=db_fael', 'root', '');

$login = $_POST['login'];
$senha = $_POST['senha'];

$query = $link->prepare('SELECT * FROM db_fael.tb_users ');

$query->execute();
$result = $query->fetchAll();
foreach ($result as $row) {
  if ($row['login'] == $login and $row['senha'] == $senha) {
    echo "<script type='text/javascript'>
                    alert('Login efetuado com sucesso!');
                    top.location.href='menu.php';
                </script>";
    print $login;
  } else {
    echo "<script type='text/javascript'>
                    alert('Login ou senha incorretos!');
                    top.location.href='login.php';
                </script>";
  }
}
