<?php

    $alunos = isset($_POST['alunos']) ? $_POST['alunos'] : array();
    $maior_nota = 0;
    $aluno_maior_nota = '';
    $total_notas = 0;
    $num_alunos = 0; 

    foreach ($alunos as $aluno) {
        $nota = $aluno['nota'];
        $total_notas += $nota;
        $num_alunos++; 
        if ($nota > $maior_nota) {
            $maior_nota = $nota;
            $aluno_maior_nota = $aluno['nome'];
        }
    }

    if ($num_alunos > 0) {
        $media = $total_notas / $num_alunos; 
        echo "Média da classe: " . $media . "<br>";
    } else {
        echo "Sem alunos para calculo da média<br>";
    }

    echo "Aluno que possui a maior nota: " . $aluno_maior_nota . " (" . $maior_nota . ")";
?>