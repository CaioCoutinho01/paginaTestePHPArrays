<?php

require_once 'funcoes.php';

$listaLivros = [];
addLivro($listaLivros, 'Soco na cara', 'Arthur Conan Doyle', 2005, 'Lido');
addLivro($listaLivros, 'O Deus Pródigo', 'Timothy Keller', 2008, 'Lido');
addLivro($listaLivros, 'A tulipa negra', 'Alexandre Dumas', 1850, 'Lido');
addLivro($listaLivros, 'Coleção de livros Harry Potter', 'J.K Rowling', '1997 a 2007', 'Lendo');
addLivro($listaLivros, 'IT - A Coisa', 'Stephen King', 1986, 'Falta Ler');
addLivro($listaLivros, 'Coleção de livros Anne of Green Gables', 'Lucy Maud Montgomery', '1908 a 1939', 'Falta Ler');
//addLivro($listaLivros, 'TesteAdd', 'teste', '1908 a 1939', 'Falta Ler');
//removerLivro('TesteAdd', $listaLivros);



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
        <?php foreach ($listaLivros as $livros) { ?>
        <?php ['nome' => $nome, 'autor' => $autor, 'dataPub' => $dataPub, 'status' => $status ] = $livros;?>
        <li>
             <?php echo "$nome escrito por $autor em $dataPub . "?>
                <?php if ($status === 'Lido') { ?>
                     <div style="color: green">
                         <?php echo "Status: $status"?>
                     </div>
                    <?php } else if ($status === 'Lendo') { ?>
                        <div style="color: orange">
                            <?php echo "Status: $status"?>
                        </div>
                        <?php } else { ?>
                            <div style="color: red">
                                <?php echo "Status: $status"?>
                            </div>
                        <?php } ?>
        </li>
        <br>
        <?php } ?>
    </ul>
</body>
</html>



