<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.vedantbhoj.com/gamestore.php");
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						$data= curl_exec ($ch);
						curl_close($ch);
echo($data);
die();
?>