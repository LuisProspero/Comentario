<?php

    include("conexao.php");
    $con = conectar();

    $sql = "SELECT * FROM mensagens";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    $apto = mysqli_fetch_assoc($query)

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Miniprojeto2</title>
</head>
<body>
    
    
          <center>  <h3>MiniProjeto2 sistema de comentario</h3></center>
       

        
            <?php if ($apto == NULL): 
                    
             else:
                      do{
            ?>
                            <br>
                        <a href="comentario.php?eliminar=
                         <?php echo $apto['id']; ?>"></a>
                                <br>
                       
                                <?php echo $apto['nome']; ?>
                                <br>

                                <?php echo $apto['sms']; ?>
                                <br>

            <?php
                      }while($apto = mysqli_fetch_assoc($query));
            endif;
            ?>    
       
        <center>

        <form action="comentario.php" method="post">
        <p class="centro">
            <input type="text" name="nome" label="Nome" maxlength="40" placeholder="Digite seu Nome">
            <br><br>
            <textarea name="sms" cols="25" rows="10" placeholder="    Escrever Mensagem " required></textarea>

            <button type="submit" name="enviar">Enviar</button>
            </p>
        </form>

</body>
</html>