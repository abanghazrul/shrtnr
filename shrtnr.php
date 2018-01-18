<?php
if (!empty($_POST['link'])):

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_PORT => "4555",
    CURLOPT_URL => "http://127.0.0.1:4555/index.php?create=true",
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 5,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode(array("link"=>$_POST["link"])),
    CURLOPT_HTTPHEADER => array(
      "Cache-Control: no-cache",
      "Content-Type: application/json"
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo ucfirst($_SERVER['SERVER_NAME']) ?></title>
</head>
<body>
	<form action="index.php?create=true" method="post" accept-charset="utf-8">
		<label for="link">Give Long URL:</label>
		<input type="text" name="link" value="http://" id="link">
		<input type="submit" value="Continue &rarr;">
	</form>
</body>
</html>
