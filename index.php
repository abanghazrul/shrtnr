<?php
require_once __dir__ . '/lib/URLShortener/URLShortener.php';
$URLShortener = new URLShortener();

if (!empty($_POST['link'])):
	echo "Original URL: " . $URLShortener->obj->originalURL . " => Short URL: <a href=\"".$URLShortener->obj->shortURL."\">".$URLShortener->obj->shortURL."</a>";
elseif(is_array($_POST)):
	header("Content-type: application/json");
	echo json_encode($URLShortener->obj);
	exit;
else:
	$URLShortener->redirect_default();
endif;
?>
