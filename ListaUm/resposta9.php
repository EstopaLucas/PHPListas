<?php
    $teste = $_POST['valor1'];
    $anoA = 2024;
    $idade = 2024 - $teste;
    $bi = $idade / 4;
    $dias = ($idade * 365) + $bi;
    $idade2025 = 2025 - $teste;
    
    echo "<p>Você tem: $idade anos.</p>";
    echo "Você tem: $dias dias de vida.";
    echo "<p>Você terá: $idade2025 anos de idade em 2025.</p>";
    ?>
    <p>
        <form action="index10.php" method="post">
            <button type='submit'>Exercicio 10</button>
        </form>
    </p>