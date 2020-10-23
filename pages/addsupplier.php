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
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
      <h1>Agregar Proveedor</h1>
      <form action="../actions/insertsupplier.php" method="post">
          <div class="two_third first">
            <label for="name">Nombre <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="50%" required>
          </div>
          <div class="two_third first">
            <label for="mobile">Celular</label>
            <input type="tel" name="mobile" id="mobile" placeholder="+503-1234-1234" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" size="50%" maxlength="14" >
          </div>

          <div class="two_third first">
            <label for="url">Website</label>
            <input type="url" name="website" id="website" value="" size="50%">
          </div>
          
          <div class="two_third first">
            <label for="phone">Telefono</label>
            <input type="tel" name="phone" id="phone" placeholder="+503-1234-1234" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" size="50%" maxlength="14">
          </div>

          <div class="two_third first">
            <label for="fax">Fax</label>
            <input type="tel" name="fax" id="fax" placeholder="+503-1234-1234" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" size="50%" maxlength="14">
          </div>

          <div class="two_third first ">
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" value="" size="50%">
          </div>

          <div class="two_third first">
            <label for="nit">NIT</label>
            <input type="text"  placeholder="1234-123456-123-1" name="nit" pattern="[0-9]{4}-[0-9]{6}-[0-9]{3}-[0-9]{1}" id="nit" value="" maxlength="17" size="50%">
          </div>

          <div class="two_third first">
            <label for="pais">Pais</label>
            <input type="text"  name="pais" id="pais" value="" maxlength="15" size="50%">
          </div>
          
          <div class="two_third first">
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" size="50%" maxlength="150">
          </div>

          <div class="two_third first">
            <label for="departamento">Departamento</label>
            <input type="text" name="departamento" id="departamento" size="50%" maxlength="150">
          </div>

          <div class="two_third first">
            <label for="municipio">Municipio</label>
            <input type="text" name="municipio" id="municipio" size="50%" maxlength="50">
          </div>



          <div>
          &nbsp;
            <input type="submit" name="submit" value="Agregar Proveedor">
            &nbsp;
            <input type="reset" name="reset" value="Limpiar Formulario">
          </div>
        </form>
      
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