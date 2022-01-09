<?php

function MostrarMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function excluirLivro(&$livros, $nomeLivro){
    if ((array_key_exists($nomeLivro,$livros))==true){
        unset ($livros[$nomeLivro]);
        return;
    }
    MostrarMensagem("Livro excluido com sucesso");
}

