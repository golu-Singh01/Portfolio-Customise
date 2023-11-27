<?php
include 'dbConnect.php';
echo "PHP file";
if($_SERVER['REQUEST_METHOD']=== "POST"){
    $link1 = $_POST['link1'];
    $link2 = $_POST['link2'];
    $link3 = $_POST['link3'];
    $link4 = $_POST['link4'];

    $query = "insert into `wooble_me_users` (`social_link_1`,`social_link_2`,`social_link_3`,`social_link_4`)values('$link1','$link2','$link3','$link4')";
//    $resQuery = mysqli_query($link,$query);
    echo $query;
    echo $link;
    echo "PHP file";
}