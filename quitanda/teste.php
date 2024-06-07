<?php
date_default_timezone_set('America/Sao_Paulo');
    //variavel
    $nome = "Thomas Melo";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
</head>
<body>
    
    <div>
      <h1>
         <?php
         //comentário
            echo "Olá Mundo"

         ?>
     </h1>

     <h2>
       Olá 
       <?php echo $nome; ?>
     </h2>

     <h2>
        <?php echo date('d/m/Y'); ?>
     </h2>
     <p>
        Data 1: <?php echo date('D/M/Y'); ?> <br>
        Data 1: <?php echo date('d/m/Y'); ?> <br>
        Hora: <?php echo date('H:i:s'); ?> <br>
        Hora: <?php echo date('h:i:s'); ?> <br>
        Data 2: <?php echo date('j'); ?><br>
        Faltam 
        <?php echo (date('t') - date('j'));  ?> 
        dias para terminar o mês <br>
     </p>
        <ul>
            <?php
                $numero = 9;
                for ($i=1; $i <=10 ; $i++) { 
                    echo '<li>';
                    echo $numero;
                    echo ' X ';
                    echo $i;
                    echo ' = ';
                     echo $numero*$i ; 
                    echo '</li>';
                }
                
            ?>
        </ul>
     <p>

     </p>

    </div>

</body>
</html>