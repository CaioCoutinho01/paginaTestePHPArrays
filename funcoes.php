<?php

function MostrarMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}


function removerLivro(string $livro, array &$array)
{
    $index = array_search($livro, array_column($array, 'nome'));

    unset($array[$index]);
}


function addLivro(&$livro, $nome, $autor, $dataPub, $status)
{
    array_push($livro,[
            'nome' => $nome,
            'autor'=> $autor,
            'dataPub' => $dataPub,
            'status' => $status
        ]
    );
}

