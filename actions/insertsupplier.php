 <?php

header("Location: ../pages/supplier.php");

  include "../conn/conn.php"; 

  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $website = $_POST['website'];
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $email = $_POST['email'];
  $nit = $_POST['nit'];
  $country = $_POST['pais'];
  $direccion = $_POST['direccion'];
  $departamento = $_POST['departamento'];
  $municipio = $_POST['municipio'];




  $sql = "insert into proveedor (nombre, telefono, fax, paginaweb, email, celular, nit, pais, direccion, departamento, municipio) values ('$name', '$phone', '$fax', '$website', '$email', '$mobile', '$nit', '$country', '$direccion', '$departamento', '$municipio')";

  if (mysqli_query($conn, $sql))
  {
      echo "Registro ingresado";
  }
  else
  {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }

  mysqli_close($conn);

 ?>
