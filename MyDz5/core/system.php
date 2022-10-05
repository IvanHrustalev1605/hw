<?php
function template(string $path, array $var = []) : string{
    $FullPath = "view/$path.php";
    extract($var);
    ob_start();
    include($FullPath);
    return ob_get_clean();
     
}
function parseUrl($url){
    $params = explode('/', $url);
    $cnt = count($params);

    if($params[$cnt - 1] === ''){
        unset($params[$cnt - 1]);
    }

    return $params;
}

?>