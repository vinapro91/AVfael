<!DOCTYPE html>
<html>

<head>
  <title>Custo de viagem </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Custo de viagem</h1>
    <div class="container">
      <tr>
        <td><a href="formulario.php">Cadastro de rotas</a></td>
        <td><a href="rotas.php">Rotas</a></td>
        <td><a href="formulario_carros.php">Cadastro de Carros</a></td>
        <td><a href="veiculos.php">Carros</a></td>
        <td><a href="custo_viagem.php">Custo de viagem</a></td>
        <td><a href="menu.php">Menu</a></td>
      </tr>
    </div>
  </header>
  <div class="container-routes">
    <table>
      <tr>
        <th>Rota</th>
        <th>Veiculo </th>
        <th>Distancia em KM</th>
        <th>Preço Total do combustível</th>
        <th>Total em litros</th>
      </tr>
      <?php
      $link = new PDO('mysql:localhost;dbname=db_fael', 'root', '');
      $queryCars = $link->prepare('SELECT * FROM db_fael.tb_cars');
      $queryRoutes = $link->prepare('SELECT * FROM db_fael.tb_routes');
      $queryCars->execute();
      $queryRoutes->execute();
      $resultCars = $queryCars->fetchAll();
      $resultRoutes = $queryRoutes->fetchAll();
      foreach ($resultCars as $carsRow) {
        foreach ($resultRoutes as $routeRow) {
          echo "<tr>";
          echo "<td>" . $routeRow['origen_city'] . " x " . $routeRow['destination_city'] . "</td>";
          echo "<td>" . $carsRow['car_model'] . "</td>";
          echo "<td>" . $routeRow['distance'] . "</td>";
          echo "<td>" . number_format((intval($routeRow['distance']) / intval($carsRow['autonomy']) * floatval($carsRow['fuel_price'])), 2) . "</td>";
          echo "<td>" . number_format((intval($routeRow['distance']) / intval($carsRow['autonomy'])), 2) . "</td>";
        }
      }
      ?>
    </table>

</body>

</html>