<?php
require_once __dir__ . '/lib/URLShortener/URLShortener.php';
$URLShortener = new URLShortener();
if (!empty($_POST['link'])):

// Set up the URL shortener.
//$URLShortener->redirect_default();
echo "Original URL: " . $URLShortener->obj->originalURL . " => Short URL: <a href=\"".$URLShortener->obj->shortURL."\">".$URLShortener->obj->shortURL."</a>";

else:

	$URLShortener->redirect_default();

endif;
?>
