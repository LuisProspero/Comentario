<?php  function conectar(){

    $serv="localhost";
    $user="root";
    $pass="";
    $db="dbminiprojet2";

    $con=mysqli_connect($serv,$user,$pass,$db);
    if(!$con){
        echo mysqli_connect_error($con);
    }
    return $con; }
?>


