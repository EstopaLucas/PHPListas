<?php

    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    
    switch ($num1 && $num2){
        case $num1 > $num2:
            echo "$num2, $num1.";
            break;
        case $num1 < $num2:
            echo "$num1, $num2.";
            break;
        case $num1 == $num2:
            echo "Numeros iguais: $num1";
            break;
    }

    ?>

    <p>
    <form action="index7.php" method="post">
        <button type="submit">Exercicio 7</button>
    </form>

    </p>