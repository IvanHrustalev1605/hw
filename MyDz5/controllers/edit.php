
<?php

IF ($_SERVER['REQUEST_METHOD'] === 'POST'){

$arr['title'] = strip_tags(trim($_POST['title']));
$arr['content'] = strip_tags(trim($_POST['content']));
$arr['cat_id'] = strip_tags(trim($_POST['cat_id']));
   
$errors = EditErrors($arr);

   If (empty($errors)){
          
           EditArticle($arr);
           header('Location:index.php');
           exit;
       
   }
   else{
           /*foreach($errors as $error){
                   echo $error;
           };*/
   };


}
else{
        $arr = ['title' => '', 'content' => '', 'cat_id' => ''];
        $errors = [];
}

$pageTitle = 'Edit new article';
$pageContent = template('v_edit',[
     'arr' => $arr,
     'errors' => $errors 
     ] );

?>  
  
