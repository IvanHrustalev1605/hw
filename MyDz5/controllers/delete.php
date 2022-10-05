<?php
$query = DelArticle($id);
if($query){
         
header('Location:/hw/MyDz5/');
}
else{
    echo "Ошибка: ";
}
?>