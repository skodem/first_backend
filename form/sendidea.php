<?php

if (isset($_POST['send'])){
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$topic=$_POST['topic'];
	$ideatext=$_POST['ideatext'];
}
mail('skodem@mail.ru','#IPC_idea: '.$topic, $ideatext."\n\n".$fullname."\n".$email);
header("Location: ".$_SERVER['HTTP_REFERER']);

?>