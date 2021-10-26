<?php

$errorMessage = $e->getMessage();
$errorCode = $e->getCode();
$errorLine = $e->getLine();
$errorFile = $e->getFile();

if ($errorCode == 9999):
    $errorMessage = $e->getMessage();

else:
    include 'index.php';
    $tab = explode(']', $errorMessage);
    ($tab1 = explode(':', $tab[2]));
    $errorMessage = ($tab1[0]);
endif;
include 'views/errorView.php';