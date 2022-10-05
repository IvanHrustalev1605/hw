<?php
$arr = [];
    

    $row = AddArticle($id);
    foreach ($row as $r){
        $title = $r['title'];
        $content = $r['content'];
    }

    If ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $arr['title'] = $_POST['title'] ?? '';
    $arr['content'] = $_POST['content'] ?? '';
    $db = CreatDB();
    $sql = "UPDATE articles SET title=:title, content=:content WHERE id_article = '$id'";
    $query = $db -> prepare($sql);
    $query -> execute($arr);
    $row = $query -> fetchAll();
  header('Location:index.php');

}

$pageContent = template('v_add',[
  'title' => $title ,
  'content' => $content 
]);
?>

