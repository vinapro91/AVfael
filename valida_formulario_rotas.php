<?php
if ($_POST['origen_city'] == '' or $_POST['origen_city'] == '') {
    echo "<script type='text/javascript'>
    alert('Para cadastrar uma rota é necessário inserir a cidade origem e a cidade de destino');
            top.location.href='formulario.php';
        </script>";
}

$link = new PDO('mysql:localhost;dbname=db_fael', 'root', '');

$query = $link->prepare('INSERT db_fael.tb_routes SET origen_city = :origen_city, destination_city = :destination_city, distance = :distance');
$query->bindValue(':origen_city', $_POST['origen_city']);
$query->bindValue(':destination_city', $_POST['destination_city']);
$query->bindValue(':distance', $_POST['distance']);

$query->execute();
echo "<script type='text/javascript'>
                    alert('Rota cadastrada com sucesso!');
                    top.location.href='rotas.php';
                </script>";
// $result = $query->fetchAll();
// foreach ($result as $row) {
//   $row['origen_city'];
//   print $row['destination_city'];
//   print $row['distance'];
// }
