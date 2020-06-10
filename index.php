<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
 <div class="row">
   <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
   <div class="col-10 col-sm-10 col-md-4 col-lg-4">
       <br><br><br><br><br>
     <form id="formulario" method="post">
     <h1 class="text-center"><strong>Login</strong></h1>
     <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required="true" maxlength="10" minlength="3">
     <br>
     <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true" maxlength="10" minlength="3">
     <br>
     <button type="submit">Ingresar</button>
     <br><br>
     <div id="alerta"></div>
     </form>
   </div>
   <div class="col-1 col-sm-1 col-md-4 col-lg-4"></div>
 </div>




<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>