<?php

    $metros = $_POST['valor1'];
    $qtde = 0;
    $custo = 0;
    
    if ($metros <= 54){
        echo "Você devera comprar uma lata de tinta custando R$80,00.";
    }
    else{
        $qtde = intdiv($metros, 54);
        if($qtde != 0){
            $qtde = $qtde + 1;
            $custo = $qtde * 80;
            echo "Você deverá comprar $qtde latas de tinta custando R$$custo,00.";
        }
        else{
            $custo = $qtde*80;
            echo "Você deverá comprar $qtde latas de tinta custando R$$custo,00.";
        }
    }
    ?>
<p>
    <form action="index9.php" method='post'>
        <button>Exercicio 9</button>
    </form>
</p>