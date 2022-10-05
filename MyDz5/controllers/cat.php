<?php

$id = (INT)$_POST['cat_id'];
$row = GetOneArticleCAT($id);
$pageTitle = 'Categories';
$pageContent = template("v_cat", [
    'row' => $row
]);
?>


    



