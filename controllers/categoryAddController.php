<?php

//$oCategories = new Category();
if (!empty($_POST)):
    if (strlen($_POST['title']) > 2):
        Category::addCategory($dbc, $_POST['title'], $_POST['description'], $_POST['picture'], $_POST['parent']);
        //$aParamsURL[2] = $_POST['id'];
        header('Location: /categorylist/');
    else:
        echo "Votre champ doit comporter plus de 2 caractères";
    endif;
endif;
$actionForm = '/categoryadd/';
include('views/categoryFormView.php');
//include('views/categoryAddView.php');