<?php
  include 'dbConnect.php';

      if($_SERVER['REQUEST_METHOD']=== "POST"){
          $title = $_POST['title'];
          $icons = $_POST['icon'];
          $query = "insert into `Project` (`Project_title`,`icon_List`)value(`$title`,`$icons`)";
          $resQuery = mysqli_query($link,$query);
      }