<?php 
echo "Форма успешно отправлена";


if(isset($new_user_surname) && isset($new_user_name) && isset($new_user_patronymic) && isset($new_user_phone) && isset($new_user_email) && isset($new_user_date) && isset($new_user_range)){
	$reg_query = "INSERT INTO users ('id','surname', 'name','patronymic','phone','email','date','range') VALUES (NULL, '".$new_user_surname."', '".$new_user_name."', '".$new_user_patronymic."', '".$new_user_phone."', '".$new_user_email."', '".$new_user_date."', '".$new_user_range."')";
}
function user_reg($connect){
	$new_user_surname = trim(htmlspecialchars($_POST['surname']));
	$new_user_name = trim(htmlspecialchars($_POST['name']));
	$new_user_patronymic = trim(htmlspecialchars($_POST['patronymic']));
	$new_user_phone = trim(htmlspecialchars($_POST['phone']));
	$new_user_email = trim(htmlspecialchars($_POST['mail']));
	$new_user_date = trim(htmlspecialchars($_POST['date']));
	$new_user_range = trim(htmlspecialchars($_POST['range']));

	$reg_user="INSERT INTO users VALUES ('1', 'Ivanon', 'Ivanon', 'Ivanon', 'Ivanon', 'Ivanon', '24.04.20', '20')";
}
