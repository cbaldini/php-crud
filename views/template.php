<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>PHP CRUD</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Last fontawesome version -->
  <script src="https://kit.fontawesome.com/ea146cfc25.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container-fuid">
      <h3 class="text-center py-3">PHP CRUD</h3>
  </div>

  <div class="container-fuid bg-light">
    <div class="container">
      <ul class="nav nav-justified py-2 nav-pills">

<?php if(isset($_GET["page"])): ?>

<?php  if($_GET["page"]=="registration"): ?>

      <li class="nav-item">
        <a class="nav-link active" href="index.php?page=registration">Registro</a>
      </li>

  <?php else: ?>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=registration">Registro</a>
    </li>

<?php endif  ?>

<?php  if($_GET["page"]=="login"): ?>

    <li class="nav-item">
      <a class="nav-link active" href="index.php?page=login">Ingreso</a>
    </li>

  <?php else:  ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=login">Ingreso</a>
        </li>

<?php endif  ?>

<?php if($_GET["page"]=="start"):  ?>

    <li class="nav-item">
      <a class="nav-link active" href="index.php?page=start">Inicio</a>
    </li>
  <?php else:  ?>
    <li class="nav-item">
      <a class="nav-link" href="index.php?page=start">Inicio</a>
    </li>
  <?php endif  ?>

    <?php if($_GET["page"]=="logout"):  ?>

        <li class="nav-item">
          <a class="nav-link active" href="index.php?page=logout">Salir</a>
        </li>
      <?php else:  ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=logout">Salir</a>
        </li>
  <?php endif  ?>

<?php else:  ?>
  <li class="nav-item">
    <a class="nav-link active" href="index.php?page=registration">Registro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=login">Ingreso</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=start">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?page=logout">Salir</a>
  </li>
<?php endif  ?>
        </ul>
  </div>
  </div>
  <div class="container-fuid py-5">
<?php
    if(isset($_GET["page"])){
      if($_GET["page"]=="registration" ||
      $_GET["page"]=="login" ||
      $_GET["page"]=="start" ||
      $_GET["page"]=="edit" ||
      $_GET["page"]=="logout")
      {
        include "pages/".$_GET["page"].".php";
      }else{
        include "pages/errors/404.php";
      }
    }else{
    include "pages/registration.php";
    }
 ?>
      </div>
</body>
</html>
