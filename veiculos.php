<!DOCTYPE html>
<html>

<head>
  <title>Carros </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Carros</h1>
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
        <th>Modelo do veículo utilizado</th>
        <th>Tipo do combustível; </th>
        <th>Km/l</th>
        <th>Preço do combustível</th>
      </tr>
      <?php
      $link = new PDO('mysql:localhost;dbname=db_fael', 'root', '');
      $query = $link->prepare('SELECT * FROM db_fael.tb_cars');
      $query->execute();
      $result = $query->fetchAll();
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['car_model'] . "</td>";
        echo "<td>" . $row['fuel'] . "</td>";
        echo "<td>" . $row['autonomy'] . 'km/L' . "</td>";
        echo "<td>" . $row['fuel_price'] . "</td>";
        echo "</tr>";
      }
      ?>
    </table>

</body>

</html>