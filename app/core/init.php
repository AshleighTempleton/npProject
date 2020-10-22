<?php

// REQUIRE THIS FILE ON EVERY PAGE

    session_start();

    $GLOBALS['config'] = array(
        'mysql' => array(
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => '',
            'db' => 'newsportal'
        ),
        'remember' => array(
            'cookie_name' => 'hash',
            // one month  
            'cookie_expiry' => 604800
        ),
        'session' => array(
            'session_name' => 'user'
        )
    );

    spl_autoload_register(function($class) {
        require_once '../' . $class . '.php';

    });

    require_once '../controller/sanitize.php';


