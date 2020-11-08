<?php
if(isset ($_GET["id"]))
{
  $item = "id";
  $value = $_GET["id"];
  $user = FormsController::selectItemData($item, $value);
}
?>

<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light" method="post">
  <div class="form-group">

    <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text"><i class="fas fa-user"></i></span>
   </div>
    <input type="text" class="form-control" value="<?php echo $user["username"]; ?>" id="name" name="updateName">
  </div>
</div>

<div class="form-group">
    <div class="input-group mb-3">
   <div class="input-group-prepend">
     <span class="input-group-text"><i class="fas fa-at"></i></span>
   </div>
    <input type="email" class="form-control" value="<?php echo $user["email"]; ?>" id="email" name="updateEmail">
  </div>
</div>

<div class="form-group">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-lock"></i></span>
    </div>
    <input type="password" class="form-control" placeholder="Escriba su password" id="password" name="updatePassword">
    <input type="hidden" name="actualPassword" value="<?php echo $user["password"]; ?>">
    <input type="hidden" name="userId" value="<?php echo $user["id"]; ?>">
  </div>
</div>
<?php
$updateUser = FormsController::updateData();

if ($updateUser == "ok")
{
  echo '<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null, null, window.location.href);
    }
  </script>';
  echo '<div class="alert alert-success">El usuario ha sido actualizado.</div>

  <script>
     setTimeout(function()
     {
         window.location = "index.php?page=start";
     },3000);
  </script>
  ';
};
?>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
</div>
