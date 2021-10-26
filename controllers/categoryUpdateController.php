<?php

$oCategories = new Category();
if (!empty($_POST)):
    if (strlen($_POST['title']) > 2):
        $oCategories->updateCategory($dbc, $_POST['id'], $_POST['title'], $_POST['description'], $_POST['picture'], $_POST['parent']);
        $aParamsURL[2] = $_POST['id'];
        header('Location: /categorylist/');
    else:
        echo "Votre champ doit comporter plus de 2 caractères";
    endif;
endif;

if (!empty($aParamsURL[2])):
    $oCategories = Category::getCategory($dbc, $aParamsURL[2]);
endif;
$actionForm = '/categoryupdate/';
include('views/categoryFormView.php');
