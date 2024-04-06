<?php

    $num1 = $_POST['valor1'];
    $num2 = $_POST['valor2'];
    $soma = $num1 + $num2;
    
    if ($num1 == $num2){
        echo "Aa soma é: $soma, ";
        $soma = $soma * 3;
        echo "porém, como os valores são iguais o valor é triplicado, logo resultando em: $soma";
    }
    else{
    echo "A soma dos valores é de: $soma";
    }
    ?>

    <p>
    <form action="index4.php" method="post">
        <button type="submit">Exercicio 4</button>
    </form>

    </p>