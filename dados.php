<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);


$lista = [];

array_push($lista, $nome);

$texto = file_put_contents('nome.txt', $lista);

header('location: index.php');
