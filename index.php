<?php
    $time_start = microtime(true);

    define('VIEWS_PATH','app/views/');
    define('CONTROLLERS_PATH','app/controllers/');
    define('DATEDUJOUR',date('j/m/Y'));

    $_GET['action'] = 'clock';


    require_once(VIEWS_PATH.'header.php');

    require_once(CONTROLLERS_PATH.'ClockController.php');
    $controller = new ClockController();

    $controller->run();

    require_once(VIEWS_PATH.'footer.php');