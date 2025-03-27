<?php

    session_set_cookie_params([
        'secure' => true,
        'httponly' => true,
    ]);

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $urls = array();

    $url = $_GET['url'];
    $urlstatic = '';


    /* Rutas */
    
    $urls[''] = 'views/index.php';
    $urls['inicio'] = 'views/index.php';
    $urls['sitemap'] = 'views/sitemap.html';
    $urls['blog'] = 'views/entrada.php';

    $rutasProtegidas = [];

    $cantidad = count(explode('/',$url));
    if($cantidad > 1){
        for ($i = 1; $i < $cantidad; $i++) {
            $urlstatic = $urlstatic . '../'; 
        }
    }
    
    if (!array_key_exists($url, $urls)) {
        header('Location: inicio');
        exit;
    }
    
    if($url =='error'){
        require_once $urls[$url];
        die();
    }

    if (isset($_SESSION['us_id']) && !in_array($url, $rutasProtegidas)) {
        /* header('Location: home');
        exit; */
    } elseif (!isset($_SESSION['us_id']) && in_array($url, $rutasProtegidas)) {
        header('Location: inicio');
        exit;
    } else {
        require_once $urls[$url];
    }

    if (isset($_GET['id'])) {
        $categoria = $_GET['id'];
    }