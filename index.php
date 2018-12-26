<h1>Простая форма обратной связи</h1>

<form action="index.php" method="post">
	<input type="text" name="userName" placeholder="Ваше имя"><br><br>
	<input type="text" name="userEmail" placeholder="Ваш email"><br><br>
	<textarea name="message" cols="50" rows="5" placeholder="Сообщение"></textarea><br><br>
	<input type="submit" value="Отправить сообщение">
</form>
<?php 
$resultEmail=false;

if (!empty($_POST)) {
		$message = "Письмо с сайта. \n"
					. $message = "Имя пользователя: " . $_POST['userName'] . "\n"
					. $message = "Email пользователя " . $_POST['userEmail'] . "\n"
					. $message = "Сообщение " . $_POST['userName'] . "\n";

		$headers = "From: info@webcademy.ru";
		$resultEmail = mail("chl9252@mail.ru", "Сообщение с сайта", $message, $headers);
		if ($resultEmail) {
			echo "<span>Сообщение отправлено успешно!";
		} else {
			echo "<span>Ошибка! Сообщение не отправлено";
		}
}

?>
