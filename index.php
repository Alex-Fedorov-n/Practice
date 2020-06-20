<?php 
require_once"includes/logic.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<title>Авторизация</title>
</head>
<body>
	<div class="web-form_wrapper container-md">
		<form method="post" action="index.php">
			<input class="form-control" type="text" name="surname" minlength="2" maxlength="20" placeholder="Введите фамилию" required="required"><br>
			<input class="form-control" type="text" name="name" minlength="2" maxlength="20" placeholder="Введите имя" required="required"><br>
			<input class="form-control" type="text" name="patronymic" minlength="2" maxlength="20" placeholder="Введите отчество" required="required"><br>
			<input class="form-control" type="phone" name="phone" placeholder="Введите номер телефона" required="required"><br>
			<input class="form-control" type="mail" name="email" placeholder="Введите Адрес почты"><br>
			<input class="form-control-file" type="file" accept=".jpg, .png" name="file"><br>
			<input class="form-control" type="date" name="date"><br>
			<output for="fader" id="volume">20</output>
			<input type="range" name="range" min="20" max="80" step="1" value="0" oninput=" outputUpdate(value)" class="form-control-range" id="fader" required="required"><br>
			<div class="g-recaptcha" id="g-recaptcha-response');
" data-sitekey="6LelvaYZAAAAALI9ReKRfNGdJPT7p1wfVvdXu5Ac" style="margin-bottom:1em"; ></div>
			<button type="submit" name="send" class="btn btn-dark">Отправить</button>
		</form>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="libs/jquery/jquery-3.5.1.min.js"></script> 
	<script src="js/common.js"></script> 
	<script src="libs/masked input/jquery.inputmask.js"></script>

</body>
</html>