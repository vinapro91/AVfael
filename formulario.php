<!DOCTYPE html>
<html>

<head>
  <title>menu</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Cadastro de Rotas</h1>
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
  <h2>Cadastro de Rotas</h2>
  <div>
    <form action="valida_formulario_rotas.php" method="post">
      <label>Cidade de origem:</label>
      <input type="text" name="origen_city" />
      <label>Cidade de destino:</label>
      <input type="text" name="destination_city" />
      <label>Distancia em km</label>
      <input type="number" name="distance" />
      <input type="submit" value="Cadastrar" />
    </form>
  </div>
</body>

</html>