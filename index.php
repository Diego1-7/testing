<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boletos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once 'process.php'; ?>
  <div class="row justify-content-center">
  <form action="process.php" method="POST">
    <div class="form-group">
    <label>Nombre Completo</label> 
  <input type="text" name="nombre" class="form-control" value="Enter your name"> 
    </div>
  <div class="form-group">
  <label>Cedula</label>
  <input type="number" name="cedula" class="form-control" value="Enter your id"> 
  </div>
  <div class="form-group">
  <label>Numero del boleto</label>
  <input type="number" name="boleto1" class="form-control" value="Enter your id"> 
  </div>
  <div class="form-group">
  <label>Verificacion del boleto</label>
  <input type="number" name="boleto2" class="form-control" value="Enter your id"> 
 
  </div> <div class="form-group">
  <button type="submit" class="btn btn-primary" name="save">Guardar </button>
  </div>
</form>
</div>
</body>
</html>