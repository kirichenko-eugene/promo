<?php

if(isset($_POST['userpromo']) && isset($_POST['username'])) {
	$promoCode = htmlspecialchars($_POST['userpromo']);
	$name = htmlspecialchars($_POST['username']);
	$phone = htmlspecialchars($_POST['userphone']);
	
	$results->insertPromo($promoCode, $name, $phone);
}

?>