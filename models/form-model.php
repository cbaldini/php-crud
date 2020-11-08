<?php

require_once "connection.php";

class FormsModel
{

  static public function selectDataFromTable($table)
  {
    $stmt = Connection::connect()-> prepare("SELECT *,DATE_FORMAT(date, '%d/%m/%y') AS date FROM $table ORDER BY id DESC");
    $stmt -> execute();
    return $stmt -> fetchAll();
    $stmt -> close();
    $stmt = null;

  }

  static public function selectDataByItemValue($table, $item, $value)
  {
    $stmt = Connection::connect()-> prepare("SELECT *,DATE_FORMAT(date, '%d/%m/%y') AS date FROM $table WHERE $item = :$item ORDER BY id DESC");
    $stmt->bindParam(":".$item, $value, PDO::PARAM_STR);
    $stmt -> execute();
    return $stmt -> fetch();
    $stmt -> close();
    $stmt = null;
  }

  static public function registerDataToTable($table, $data)
  {
    $stmt = Connection::connect()-> prepare("INSERT INTO $table(username, email, password) VALUES (:username, :email, :password)");
    $stmt->bindParam(":username", $data["username"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);

    if($stmt -> execute()){
      return "ok";
    }else{
      print_r(Connection::connect()->errorInfo());
    }
    $stmt -> close();
    $stmt = null;
  }

  static public function updateData($table, $data)
  {
    $stmt = Connection::connect()-> prepare("UPDATE $table SET username = :username, email = :email, password = :password WHERE id = :id");
    $stmt->bindParam(":username", $data["username"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $data["password"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);

    if($stmt -> execute()){
      return "ok";
    }else{
      print_r(Connection::connect()->errorInfo());
    }
    $stmt -> close();
    $stmt = null;
  }

  static public function deleteData($table, $value)
  {
    $stmt = Connection::connect()-> prepare("DELETE FROM $table WHERE id = :id");

    $stmt->bindParam(":id", $value, PDO::PARAM_INT);

    if($stmt -> execute()){
      return "ok";
    }else{
      print_r(Connection::connect()->errorInfo());
    }
    $stmt -> close();
    $stmt = null;
  }

}

?>
