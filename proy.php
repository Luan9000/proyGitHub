<html> 
<head> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Formulario.</title> 
</head> 

<body> 
  
<center><h1>Calculadora</h1></center>
<br>
<center>
<div class="container">
<div class="col-3">
<div class="card">
    <div class="card-body">
    <div class="card-auto">
      
    <div class="custom-select" style="width:200px;">
            <select>
                <option value="0">Sumar</option>
                <option value="1">Restar</option>
                <option value="2">Multiplicar</option>
                <option value="3">Dividir</option>
            </select>
    </div>

    <form method="POST" action="sumar.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Valor1</label>
            <input type="text" name="T1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese Valor">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Valor2</label>
            <input type="text" name="T2" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Valor">
        </div>

        <center><button type="submit" class="btn btn-primary"name="B1">Enviar</button><center>
        
    </form>
</div>
</div>
</div>
</div>
</div>
</center>
</body>
</html>