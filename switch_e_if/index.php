<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
</head>
<body>
  <!--Imprima a opção desejada pelo cliente usando if e também switch-->
  <h4>Cardapio:</h4>
  <label for="carne">- carne</label><br>
  <label for="ovo">- ovo</label><br>
  <label for="milk">- leite</label><br><br>
  <form action="func_if.php" method="POST">
    <label for="escolha">Informe o produto que deseja comprar:</label><br>
    <input type="text" name="cod">
    <input type="submit" value="Confirmar">
  </form>
</body>
</html>