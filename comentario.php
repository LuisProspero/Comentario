<?php


   include("conexao.php");
   $con = conectar();
   session_start();



    if(isset($_POST['enviar'])){
        
        $data = date("y/m/d h/i");
        $nome = $_POST['nome'];
        $mensagem = $_POST['sms'];
        $sql = "INSERT INTO mensagens(data_sms,nome,sms) VALUES('$data','$nome','$mensagem')";
        $query = mysqli_query($con,$sql) or die(mysqli_error($con));
        Header("Location: index.php");

    }
    

    
?>   