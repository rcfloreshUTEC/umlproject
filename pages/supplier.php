<!DOCTYPE html>
<!--
Template Name: Surogou
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Surogou | Pages | Sidebar Right</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php 
  include "header.php"; 
  include "menu.php"; 
  include "../conn/conn.php"
?>

  
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Sidebar Right</h6>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>

  
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row3">

  <main class="hoc container clear"> 
  <div><a href="addsupplier.php"> <i class="fa-plus fa-fw fas"></i> Agregar Proveedor</li></a></div>

    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
    
      <!-- ################################################################################################ -->
      <h1>Provedores</h1>
      <div class="scrollable">
        <?php
          $query = sprintf("SELECT nombre, telefono, email, celular, concat(direccion,', ',municipio,', ',departamento,', ', pais) AS direccion FROM proveedor;");

          echo '<table>
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>E-Mail</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                  </tr>
                </thead>';

              if ($result = $conn->query($query)) 
              {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["nombre"];
                    $field2name = $row["telefono"];
                    $field3name = $row["email"];
                    $field4name = $row["celular"];
                    $field5name = $row["direccion"]; 
            
                    echo '<tbody>
                          <tr>
                              <td>'.$field1name.'</td> 
                              <td>'.$field2name.'</td> 
                              <td>'.$field3name.'</td> 
                              <td>'.$field4name.'</td> 
                              <td>'.$field5name.'</td> 
                              </tr>
                          </tbody>
                            ';
                }
                $result->free();

              echo "</table>";
              } 
            ?>
        </div>
      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->

      <?php 
        include 'sbmenu.php'; 
        include 'sbaddress.php'; 
      ?>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
<?php
include "footer.php";
include "copyright.php";
?>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>