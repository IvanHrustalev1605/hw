
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<?php
 include_once('init.php');

 define('URL_PARAMS', parseUrl($_GET['querysystemurl'] ?? ''));
 $cname = URL_PARAMS[0] ?? 'index';
 $art = URL_PARAMS[1] ?? '';
       $id = (int)$art;

 $path = "controllers/$cname.php";
 $pageContent = '';
 $pageTitle = 'My site';
        $errors =[];
 if(checkControllerName($cname) && file_exists($path)){
	include_once($path);
       
}
else{
         $pageContent = template('errors/v_error');
       
}
  $html = template('main/v_main', [
                'title' => $pageTitle,
                'content' => $pageContent
         ]);
        echo $html;

 
?>

