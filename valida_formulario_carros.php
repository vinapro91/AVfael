<?php
if ($_POST['car_model'] == '' or $_POST['fuel'] == '' or $_POST['autonomy'] == '' or $_POST['fuel_price'] == '') {
  echo "<script type='text/javascript'>
    alert('todos os campos devem ser preenchidos');
            top.location.href='formulario_carros.php';
        </script>";
}

$link = new PDO('mysql:localhost;dbname=db_fael', 'root', '');

$query = $link->prepare('INSERT db_fael.tb_cars SET car_model = :car_model, fuel = :fuel, autonomy = :autonomy, fuel_price=:fuel_price; ');
$query->bindValue(':car_model', $_POST['car_model']);
$query->bindValue(':fuel', $_POST['fuel']);
$query->bindValue(':autonomy', $_POST['autonomy']);
$query->bindValue(':fuel_price', $_POST['fuel_price']);

$query->execute();
echo "<script type='text/javascript'>
                    alert('Veiculo cadastrada com sucesso!');
                    top.location.href='veiculos.php';
                </script>";
// $result = $query->fetchAll();
// foreach ($result as $row) {
//   $row['origen_city'];
//   print $row['destination_city'];
//   print $row['distance'];
// }
