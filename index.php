<!-- 

Счастливый билет - это когда сумма первых трех цифр в номере билета равна сумме второй тройки цифр (номер шестизначный). Пример: 123015 - счастливый, так как сумма каждой из половин равна 6.

На вход подаются 2 строки:

    начальный номер билета (например: 111111)
    конечный номер билета (например: 123321)

Нужно вывести все счастливые билеты из заданного диапазона.
-->

<?php

function luckyTickets (int $startTicket, int $endTickets) {
	$arrLuckyTickets = [];
for ($startTicket; $startTicket <= $endTickets; $startTicket++) {
	$thisTicket = str_split($startTicket,3);
	$firstThreeNumbers = str_split($thisTicket[0],1 );
	$endThreeNumbers = str_split($thisTicket[1],1);
	if (array_sum($firstThreeNumbers)===array_sum($endThreeNumbers)) {
		$arrLuckyTickets[] = $startTicket;
	}

}
	return $arrLuckyTickets;
}

foreach (luckyTickets(100000, 100999) as $value) {
	echo "{$value} <br>";
}

?>