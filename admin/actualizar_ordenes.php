<!DOCTYPE html>
<html lang="en">
<?php

  include("../conexion/conectar.php");
  error_reporting(0);
  session_start();

  include_once '../ordenes-accion.php';
  require_once '../codificador.php';

  if(strlen($_SESSION['user_id'])==1)
  { 
    header('location:login.php');
  }
  else
  {
    if(isset($_POST['update']))
    {
      $form_id=$_GET['form_id'];
      $estatus=$_POST['estatus'];

      $sql = mysqli_query($db,"update ordenes set estatus='$estatus' where o_id='$form_id'");
      echo "<script>alert('Detalle de forma actualizado exitosamente');</script>";
    } 
?>


  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Favicon icon -->
      <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
      <title>Burgerslike</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/helper.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
      <!--[if lt IE 9]>
      <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script language="javascript" type="text/javascript">
      function f2()
      {
      window.close();
      }ser
      function f3()
      {
      window.print(); 
      }
    </script>

    <style type="text/css" rel="stylesheet">

    .indent-small {
      margin-left: 5px;
    }
    .form-group.internal {
      margin-bottom: 0;
    }
    .dialog-panel {
      margin: 10px;
    }
    .datepicker-dropdown {
      z-index: 200 !important;
    }
    .panel-body {
      background: #e5e5e5;
      /* Old browsers */
      background: -moz-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
      /* FF3.6+ */
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #e5e5e5), color-stop(100%, #ffffff));
      /* Chrome,Safari4+ */
      background: -webkit-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
      /* Chrome10+,Safari5.1+ */
      background: -o-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
      /* Opera 12+ */
      background: -ms-radial-gradient(center, ellipse cover, #e5e5e5 0%, #ffffff 100%);
      /* IE10+ */
      background: radial-gradient(ellipse at center, #e5e5e5 0%, #ffffff 100%);
      /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#e5e5e5', endColorstr='#ffffff', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */
      font: 600 15px "Open Sans", Arial, sans-serif;
    }
    label.control-label {
      font-weight: 600;
      color: #777;
    }

    table { 
      width: 650px; 
      border-collapse: collapse; 
      margin: auto;
      margin-top:50px;
      }

    /* Zebra striping */
    tr:nth-of-type(odd) { 
      background: #eee; 
      }

    th { 
      background: #004684; 
      color: white; 
      font-weight: bold; 
      }

    td, th { 
      padding: 10px; 
      border: 1px solid #ccc; 
      text-align: left; 
      font-size: 14px;
      }
    </style>
  </head>

  <body>

    <div style="padding:50px;">

      <form name="updateticket" id="updatecomplaint" method="post" style="width:100%; height:100%;"> 
      
        <table border="0" cellspacing="0" cellpadding="0">

          <tr >
            <td><b>Numero de forma</b></td>
            <td><?php echo htmlentities($_GET['form_id']); ?></td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td >&nbsp;</td>
          </tr>
          
          <tr>
            <td><b>Estatus</b></td>
            
            <td>
              <select name="estatus" required="required" >
                <option value="">Seleccionar Estatus</option>
                <option value="En proceso">En proceso</option>
                <option value="En preparación">En preparación</option>
                <option value="Listo">Listo</option>
                <option value="Enviado">Enviado</option>
                <option value="Entregado">Entregado</option>
                <option value="Cancelado">Cancelado</option>
              </select>
            </td>
          </tr>


              <tr >
              
            </tr>
            


                <tr>
              <td><b>Accion</b></td>
              <td><input type="submit" name="update"  class="btn btn-primary" value="Enviar">
            
              <input name="Submit2" type="submit"  class="btn btn-danger"  value="Cerrar ventana " onClick="return f2();" style="cursor: pointer;"  /></td>
            </tr>

        </table>

      </form>

    </div>

  </body>

</html>

<?php 
  } 
?>