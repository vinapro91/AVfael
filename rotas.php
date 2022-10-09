<!DOCTYPE html>
<html>

<head>
  <title>Rotas </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Rotas</h1>
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
        <th>Cidade de origem</th>
        <th>Cidade de destino</th>
        <th>Distancia</th>
      </tr>
      <?php
      $link = new PDO('mysql:localhost;dbname=db_fael', 'root', '');
      $query = $link->prepare('SELECT * FROM db_fael.tb_routes');
      $query->execute();
      $result = $query->fetchAll();
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['origen_city'] . "</td>";
        echo "<td>" . $row['destination_city'] . "</td>";
        echo "<td>" . $row['distance'] . 'km' . "</td>";
        echo "</tr>";
      }
      ?>
    </table>

</body>

</html>