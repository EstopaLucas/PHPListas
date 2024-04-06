<?php

    $num = $_POST['valor'];
    $i = 0;

    while($i <= 10){
        $tab = $num * $i;
        echo "<p>$num x $i = $tab</p>";
        $i = $i + 1;
    }

    ?>

    <p>
        <form action="index5.php">
            <button>Exercicio 5</button>
        </form>
    </p>