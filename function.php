<?php 

function goodDay($name, $day) {

switch ($day) {
	case 'понедельник':

	case 'вторник':

	case 'среда':

	case 'четверг':

	case 'пятница':
		echo "Привет {$name}! Хорошего и продуктивного рабочего дня!"; 
		break;
	case 'суббота':

	case 'воскресенье':
		echo "Привет {$name}! Желаю вам хорошо отдохнуть в этот день!";
		break;
	
	default:
		echo "Неверный день";
		break;
}

};

goodDay("Юрий","воскресенье");

 ?>