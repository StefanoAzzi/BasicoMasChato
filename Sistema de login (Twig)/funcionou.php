<?php
// funcionou.php

// Carrega o carregador do Twig
require('twig_carregar.php');

// Mostra o template na tela
echo $twig->render('funcionou.html', [
    'titulo' => "Funcionou"
]);