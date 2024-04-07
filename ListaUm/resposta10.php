<?php

    $altura = $_POST['valor2'];
    $peso = $_POST['valor1'];

    $valor1 = $altura * $altura;
    $imc = number_format($peso / $valor1,2,'.','');


    if ($imc > 24.9){
        echo "Seu IMC é $imc, portanto está acima do peso ideal!<p>Leia mais em: https://vidasaudavel.einstein.br/calcular-o-seu-imc/#:~:text=Fazer%20o%20c%C3%A1lculo%20do%20IMC%20%C3%A9%20bem%20f%C3%A1cil.,1%2C6%20%3D%202%2C56</p>";
    }

    elseif($imc < 18.6){
        echo "<p>Seu IMC é $imc, portanto está abaixo do peso ideal!<p>Leia mais em: https://vidasaudavel.einstein.br/calcular-o-seu-imc/#:~:text=Fazer%20o%20c%C3%A1lculo%20do%20IMC%20%C3%A9%20bem%20f%C3%A1cil.,1%2C6%20%3D%202%2C56</p>";
    }

    else{
        echo "Seu IMC é $imc, portanto está no peso ideal!<p>Leia mais em: https://vidasaudavel.einstein.br/calcular-o-seu-imc/#:~:text=Fazer%20o%20c%C3%A1lculo%20do%20IMC%20%C3%A9%20bem%20f%C3%A1cil.,1%2C6%20%3D%202%2C56</p>";
    }