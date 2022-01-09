<?php

require_once 'funcoes.php';

$listaLivros = [
    'Soco na cara' => [
        'autor' => 'Arthur Conan Doyle',
        'dataPublicacao' => 2005,
        'statusLeitura' => 'Lido'
    ],
    'O Deus Pródigo' => [
        'autor' => 'Timothy Keller',
        'dataPublicacao' => 2008,
        'statusLeitura' => 'Lido'
    ],
    'A tulipa negra' => [
        'autor' => 'Alexandre Dumas',
        'dataPublicacao' => 1850,
        'statusLeitura' => 'Lido'
    ],
    'A colina sagrada' => [
        'autor' => 'Álvaro Cardoso Gomes',
        'dataPublicacao' => 2006,
        'statusLeitura' => 'Lido'
    ],
    'Coleção de livros Harry Potter' => [
        'autor' => 'J.K Rowling',
        'dataPublicacao' => '1997 a 2007',
        'statusLeitura' => 'Lendo'
    ],
    'IT - A Coisa' => [
        'autor' => 'Stephen King',
        'dataPublicacao' => 1986,
        'statusLeitura' => 'Falta ler'
    ],
    'Coleção de livros Anne of Green Gables' => [
        'autor' => 'Lucy Maud Montgomery',
        'dataPublicacao' => '1908 a 1939',
        'statusLeitura' => 'Falta ler'
    ]
];



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Books's List</title>
</head>
<body>
    <h1>Lista de Livros</h1>
    <ul>
        <?php foreach ($listaLivros as $nomeLivro => $livros) { ?>
        <?php ['autor' => $autor, 'dataPublicacao' => $dataPub, 'statusLeitura' => $statusLeitura ] = $livros;?>
        <li>
             <?php echo "$nomeLivro escrito por $autor em $dataPub . "?>
                <?php if ($statusLeitura === 'Lido') { ?>
                     <div style="color: green">
                         <?php echo "Status: $statusLeitura"?>
                     </div>
                    <?php } else if ($statusLeitura === 'Lendo') { ?>
                        <div style="color: orange">
                            <?php echo "Status: $statusLeitura"?>
                        </div>
                        <?php } else { ?>
                            <div style="color: red">
                                <?php echo "Status: $statusLeitura"?>
                            </div>
                        <?php } ?>
        </li>
        <br>
        <?php } ?>
    </ul>
</body>
</html>



