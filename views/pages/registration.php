
<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light" method="post">

    <label for="name">Nombre de usuario:</label>
    <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text"><i class="fas fa-user"></i></span>
   </div>
    <input type="text" class="form-control" placeholder="Escriba su name" id="name" name="registerName">
  </div>

    <label for="email">Email address:</label>
    <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text"><i class="fas fa-at"></i></span>
   </div>
    <input type="email" class="form-control" placeholder="Escriba su email" id="email" name="registerEmail">
  </div>

    <label for="pwd">Contraseña:</label>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-lock"></i></span>
    </div>
    <input type="password" class="form-control" placeholder="Escriba su password" id="password" name="registerPassword">
  </div>

<?php

  $register = FormsController::registerData();
  if($register == "ok")
  {
    echo '<script>
      if(window.history.replaceState)
      {
          window.history.replaceState(null, null, window.location.href);
      }
    </script>';
    echo '<div class="alert alert-success">El usuario ha sido registrado.</div>';
  };
?>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
