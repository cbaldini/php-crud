<?php
if(!isset($_SESSION["loginValidated"]))
{
  echo '<script>window.location = "index.php?page=login"</script>';
  return;

}else{
   if($_SESSION["loginValidated"] != "ok")
  {
    echo '<script>window.location = "index.php?page=login"</script>';
    return;
  }
}
 $users = FormsController::selectData();
 $updateUser = new FormsController();
 $updateUser -> updateData();
 ?>


<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Fecha</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach($users as $key => $value):?>
        <tr>
        <td><?php echo $key+1; ?>
        <td><?php echo $value["username"];?></td>
        <td><?php echo $value["email"];?></td>
        <td><?php echo $value["date"];?></td>
        <td>

        <div class="btn-group">

          <div class="px-1">

          <a href="index.php?page=edit&id=<?php echo $value["id"]; ?>"
            class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

          </div>

          <form method="post">

            <input type="hidden" value="<?php echo $value["id"]; ?>" name="deleteItem">

            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

            <?php
              $delete = new FormsController();
              $delete -> deleteData();
            ?>

          </form>

        </div>
      </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
