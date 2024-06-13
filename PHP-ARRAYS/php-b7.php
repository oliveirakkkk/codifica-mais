<?php

$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0] // Aluno 4
    ];

function calcularMedia($notasALunos) {

    $notasSomadas = array_sum($notasALunos); 
    $mediaNotas = $notasSomadas / count($notasALunos);

    return $mediaNotas;
        
}

$quantidadeAlunosAprovados = 0;
$quantidadeAlunosReprovados = 0;

 for ($i = 0; $i < count($notasAlunos); $i += 1) {

    $media = calcularMedia ($notasAlunos[$i]);

    if ($media < 7) {

        echo "Reprovado, sua media foi " . $media . "\n";
        $quantidadeAlunosReprovados += 1;
    }

    else {

        echo "Aprovado, sua media foi " . $media . "\n";
        $quantidadeAlunosAprovados += 1;

    }

}

echo "A quantidade de alunos reprovados é " . $quantidadeAlunosReprovados . "\n";

echo "A quantidade de alunos aprovados é " . $quantidadeAlunosAprovados . "\n";






        

        