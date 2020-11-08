<?php

class FormsController
{

  public static function selectData()
  {
    $table = "users";
    $response = FormsModel::selectDataFromTable($table);
    return $response;
  }

  public static function selectItemData($item, $value)
  {
    $table = "users";
    $response = FormsModel::selectDataByItemValue($table, $item, $value);
    return $response;
  }


public function loginData()
{
  if(isset($_POST["loginEmail"]))
  {
    $table = "users";
    $item = "email";
    $value = $_POST["loginEmail"];
    $response = FormsModel::selectDataByItemValue($table, $item, $value);

    if($response["email"] == $_POST["loginEmail"] && $response[password] == $_POST["loginPassword"])
    {
      $_SESSION["loginValidated"] = "ok";

      echo '<script>
        if(window.history.replaceState)
        {
            window.history.replaceState(null, null, window.location.href);
        }
        window.location = "index.php?page=start"
      </script>';    }
    else
    {
      echo '<div class="alert alert-danger">E-mail o clave incorrectos.</div>';
    }
  }
}

public static function registerData()
{
  if(isset($_POST["registerName"]))
  {
    $table = "users";
    $data = array("username" => $_POST["registerName"],
                  "email" => $_POST["registerEmail"],
                  "password" => $_POST["registerPassword"]);

   $response = FormsModel::registerDataToTable($table, $data);
   return $response;
  }
}

static public function updateData()
{
  if(isset($_POST["updateName"]))
  {
    if($_POST["updatePassword"] != "")
    {
      $password = $_POST["updatePassword"];
    }
    else {
      $password = $_POST["actualPassword"];
    }
    if($_POST["updateEmail"] != "")
    {
      $email = $_POST["updateEmail"];
    }

    $table = "users";

    $data = array("id" => $_POST["userId"],
                  "username" => $_POST["updateName"],
                  "email" => $_POST["updateEmail"],
                  "password" => $password);

   $response = FormsModel::updateData($table, $data);

   return $response;
  }
}

public function deleteData()
{
  if(isset($_POST["deleteItem"]))
  {
    $table = "users";
    $value = $_POST["deleteItem"];
    $response = FormsModel::deleteData($table, $value);
    if ($response == "ok")
    {
      echo '<script>
        if(window.history.replaceState)
        {
            window.history.replaceState(null, null, window.location.href);
        }
        window.location = "index.php?page=start";
      </script>';
    }

  }

}

}
?>
