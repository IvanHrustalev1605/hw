<?php
$left = template('main/v_aside');
$content = template('main/v_asideCont');

$pageContent = $template('main/v_main', [
    'content' => $content,
    'left' => $left,
    'title' => 'Some'
])

?>