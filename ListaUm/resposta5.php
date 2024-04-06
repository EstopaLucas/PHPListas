<?php

    $num = $_POST['valor1'];
    $fat = $num;
    $total = 0;

    while ($num > 1){
        $num = $num - 1;
        echo "<p> $fat x $num = ";
        $fat =$fat * $num;
        echo "$fat</p>";    
        $total = $total + $fat;
        
    }


    echo "Resposta: $fat";
    ?>
    <p>
    <form action = "index6.php" method = "post">
        <button type= "submit">Exercicio 6</button>        
    </form>
    </p>