<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
  <form action="resposta7.php" method="post">
    <?php
      for ($i = 1; $i <= 10; $i++) {
        echo '<input type="text" name="alunos['.$i.'][nome]" placeholder="Nome do Aluno">';
        echo '<input type="number" step="0.01" name="alunos['.$i.'][nota1]" placeholder="Nota 1">';
        echo '<input type="number" step="0.01" name="alunos['.$i.'][nota2]" placeholder="Nota 2">';
        echo '<br>';
      }
    ?>
        <button type="submit" name="submit">Enviar</button>
    </form>
</body>
</html>