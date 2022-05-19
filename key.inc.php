<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","amogusamogusamog",0,"3423453456346345");
	return $n;
}
?>