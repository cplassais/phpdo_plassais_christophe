<?php

$aResponses = Category::getListCategories($dbc);

include('views/categoryListView.php');