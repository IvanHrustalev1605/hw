<link href="css/main.css" rel="stylesheet">
<?php
$id = $_GET['id'];
$row = GetOneArticle($id);
If (!empty($row)){
$pageTitle = 'One article';
$title = 'Article';
$left = template('main/v_asideCont',[
    'id' => $id
]);
$content = template('v_oneArticle',[
    'row' => $row
]);

$pageContent = template('main/v_aside', [
    'content' => $content,
    'title' => $title,
    'left' => $left,
    'id' => $id
]);
}
else{
$pageContent = template('errors/v_error');
}
?>