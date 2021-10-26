<?php
const SERVER_NAME = 'localhost';
const DB_NAME = 'nocihb';
const DB_USER = 'eval2';
const DB_PASS = 'eval2';

spl_autoload_register(function ($Class) {
    require_once 'models/' . $Class . '.php';
});

try {
    $dbc = new Db(SERVER_NAME, DB_NAME, DB_USER, DB_PASS);
    if (!isset($dbc)):
        throw new Exception('Impossible de se connecter !');
    endif;
    include 'index.php';
    $aParamsURL = explode('/', $_SERVER['REQUEST_URI']);
    switch ($aParamsURL[1]) {
        case 'categorylist':
            include 'controllers/categoryListController.php';
            break;
        case 'categorydelete':
            include 'controllers/categoryDeleteController.php';
            break;
        case 'categoryadd':
            include 'controllers/categoryAddController.php';
            break;case 'categoryupdate':
        include 'controllers/categoryUpdateController.php';
        break;
        default:
            include 'controllers/errorPageController.php';
    }
} catch (Exception $e) {
    include 'controllers/errorController.php';
}

