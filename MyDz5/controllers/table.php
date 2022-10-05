<?php
$row = GetArticle();
$arr = ['title' => '', 'content' => '', 'cat_id' => ''];
  
IF ($_SERVER['REQUEST_METHOD'] === 'POST'){

$arr['title'] = strip_tags(trim($_POST['title']));
$arr['content'] = strip_tags(trim($_POST['content']));
$arr['cat_id'] = strip_tags(trim($_POST['cat_id']));
}
?>