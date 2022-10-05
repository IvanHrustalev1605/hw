<?php
$query = DelArticle();
if($query){
         
    header('Location:index.php');
}
else{
    echo "Ошибка: ";
}
?>