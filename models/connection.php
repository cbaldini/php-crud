<?php

class Connection{
  static public function connect()
  {
    $link = new PDO("mysql:host=localhost;dbname=php-crud","cristian","e75kq43w23");
    $link -> exec("set names utf8");
    return $link;
  }
}

 ?>
