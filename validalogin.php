<?php
  include('config/conexion.php');

  if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password'])){
      $usuario = $_POST['usuario'];
     $password = $_POST['password'];
      $query = "SELECT * FROM usuarios WHERE (nom_usuario ='$usuario' && passwordd = '$password')";
      $result = mysqli_query($conn,$query);

      if(mysqli_num_rows($result)>0){
          echo json_encode(array('success'=> 1));
      }else{
        echo json_encode(array('success'=> 0));
      }
  }

?>