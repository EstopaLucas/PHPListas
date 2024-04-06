<?php

    $valor = $_POST['valor']; //cria uma variável e recebe ela da página anterior
    if($valor > 0)
        echo "Valor positivo!";
    elseif($valor < 0)
        echo "Valor Negativo!";
    else
        echo "Valor igual a zero!";