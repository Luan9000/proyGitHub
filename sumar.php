<html> 
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Sumar.</title> 
</head> 
<body> 

<?php

$valor1 = $_POST['T1'];
$valor2 = $_POST['T2'];
$valor3 = $_POST['T3'];

$suma = $valor1 + $valor2 + $valor3;

echo "$valor1 + $valor2 + $valor3 = $suma";

?>

</body>
</html>

<form method="POST" action="sumar.php">
  <div class="form-group">
    <label for="exampleInputValor1">Valor1</label>
    <input type="valor1" class="form-control" id="exampleInputValor1" aria-describedby="emailHelp" placeholder="que miras">
  </div>

  <div class="form-group">
    <label for="exampleInputValor1">Valor2</label>
    <input type="valor2" class="form-control" id="exampleInputValor2" placeholder="Pon tu numero ">
  </div>

  <button type="submit" value="Sumar" name="B1">Submit</button>
</form>