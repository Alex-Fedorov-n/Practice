<?php 
require_once"database.php";

$date=$_POST;
//Проверка на ошибки запонения форм
if(isset($date['send'])){

	$errors=array();
	if(trim($date['surname']=='  ')){
		$errors[] = 'Введите фамилию'; 
	}
	if(trim($date['name'] == '  ')){
		$errors[] = 'Введите имя';
	}
	if(trim($date['patronymic'] == '  ')){
		$errors[] = 'Введите отчество';
	}
	if(trim($date['phone'] == '')){
		$errors[] = 'Введите телефон';
	}
	// Если ошибок нет, то все ок
	if(empty($errors)){
		if(isset($date['send'])){
			echo "Форма успешно отправлена";
			//Заполнение базы данных
			$user=R::dispense('users');
			$user->surname=$date['surname'];
			$user->name=$date['name'];
			$user->patronymic=$date['patronymic'];
			$user->phone=$date['phone'];
			if($date['email'])
			$user->email=$date['email'];
			if($date['date'])
			$user->date=$date['date'];
			if($date['range'])
			$user->range=$date['range'];
			R::store($user);
			//Отправка email-а
			$email="fedorov073107@gmail.com";
			$subject="Отправитель: {$date['surname']} {$date['name']} {$date['patronymic']}.";
			$header="From: {$date['email']}.";
			$message="Номер отправителя{$date['phone']} и его файл: {$date['file']}";
			$mail=mail($email, $subject, $message, $header);
			// Скрытие html формы 
			die();
		}
	}
	// Обозначение ошбок
	else{

		echo '<div style ="color: red;">' .array_shift($errors). '</div><hr>';
	}
}


