<!DOCTYPE html>
<html>

<head>
  <title>Cadastro de Carros</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
  <header>
    <h1>Cadastro de Carros</h1>
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
  <h2>Cadastro de Carros</h2>
  <div>
    <form action="valida_formulario_carros.php" method="post">
      <label>Modelo do veiculo:</label>
      <input type="text" name="car_model" />
      <label>Tipo de combustivel:</label>
      <input type="text" name="fuel" />
      <label>Autonomia do veiculo:</label>
      <input type="text" name="autonomy" />
      <label>Preço do combustivel:</label>
      <input type="text" name="fuel_price" />
      <input type="submit" value="Cadastrar" />
    </form>
  </div>
</body>

</html>