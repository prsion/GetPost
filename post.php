<?php
// echo '<pre>';
// print_r($_POST);
// echo'</pre>';
if (count($_POST) > 0) {

	$text = $_POST['text'];
	$phone = $_POST['phone'];
	// echo $text .'<br>'.$phone;

	file_put_contents('eee.xls', "$text $phone\n", FILE_APPEND);

	echo 'Thanks for your getting in touch with us';

	foreach ($variable as $key => $value) { }
}




?>



<form method="post">
	Name <br>
	<input type="text" name="text"><br>
	Phone<br>
	<input type="password" name="phone"><br>

	<input type='submit' value='Send'>
</form>