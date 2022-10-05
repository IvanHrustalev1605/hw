<?php
function template(string $path, array $var = []) : string{
    $FullPath = "view/$path.php";
    extract($var);
    ob_start();
    include($FullPath);
    return ob_get_clean();
     
}


?>