<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-light" method="post">

<div class = "form-group">

    <label for="email">Email address:</label>

    <div class="input-group">

   <div class="input-group-prepend">

     <span class="input-group-text">
       <i class="fas fa-at"></i>
     </span>
   </div>

    <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="loginEmail">

  </div>

</div>

<div class = "form-group">

    <label for="password">Contraseña:</label>

    <div class="input-group">

    <div class="input-group-prepend">

      <span class="input-group-text">
        <i class="fas fa-lock"></i>
      </span>

    </div>

    <input type="password" class="form-control" placeholder="Escriba su password" id="password" name="loginPassword">

  </div>

</div>

<?php

  $login = new FormsController();
  $login -> loginData();
?>

  <button type="submit" class="btn btn-primary">Ingresar</button>

  </form>

</div>
