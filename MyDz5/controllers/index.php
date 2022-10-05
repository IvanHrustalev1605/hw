<?php
$row = GetArticle();
$isTable = ($_GET['view'] ?? '') === 'table'; // index.php?view=table
$template = $isTable ? 'v_table' : 'v_index';

$pageTitle = 'All messages';
$pageContent = template("$template", [
	'row' => $row
]);
?>
