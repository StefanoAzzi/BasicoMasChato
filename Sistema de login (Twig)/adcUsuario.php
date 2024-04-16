<?php
// adcUsuario.php

// Carrega o carregador do Twig
require('twig_carregar.php');

// Mostra o template na tela
echo $twig->render('adcUsuario.html', [
    'titulo' => "Adicionar novo usuário"
]);