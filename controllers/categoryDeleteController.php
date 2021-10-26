<?php

$oSubjects = new Category();
echo($aParamsURL[2]);
if (!empty($aParamsURL[2])):
    Category::deleteCategory($dbc, $aParamsURL[2]);
endif;
header('Location: /categorylist/');

