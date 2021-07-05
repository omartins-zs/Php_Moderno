<?php
ini_set('display_errors', 0);

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
$categorias[] = 'Idoso';

// print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
// var_dump($nome);
// var_dump($idade);
// return 0;

if (empty($nome)) {
    echo 'O nome nao pode ser vazio';
    return;
}
if (strlen($nome) < 3) {
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}
if (strlen($nome) > 40) {
    echo 'O nome e muito extenso';
    return;
}
if (!is_numeric($idade)) {
    echo 'Inform um numero para a sua idade';
    return;
}


if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Infantil')
            echo "O Nadador "  .  $nome .  " compete na categoria Infantl ";
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Adolescente')
            echo "O Nadador " .  $nome .  " compete na categoria " .  $categorias[$i];
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'Adulto')
            echo "O Nadador " . $nome .  " compete na categoria Adulto";
    }
}
