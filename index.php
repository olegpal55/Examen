<?php
require_once 'date.php';
    $date = new Date('2025-12-31');

    echo $date->getYear(); echo ' ';  // выведет '2025'
    echo $date->getMonth(); echo ' '; // выведет '12'
    echo $date->getDay(); echo ' '; // выведет '31' 

    echo '<br>';

    echo $date->getWeekDay(); echo ' ';    // выведет '3'
    echo $date->getWeekDay('ru'); echo ' '; // выведет 'среда'
    echo $date->getWeekDay('en'); echo ' '; // выведет 'wednesday'

    echo '<br>';

    echo (new Date('2025-12-31'))->addYear(1); // '2026-12-31'
    echo '<br>';
    echo (new Date('2025-12-31'))->addDay(1);  // '2026-01-01'
    echo '<br>';
    echo (new Date('2025-12-31'))->subDay(3); // '2025-12-28'
    echo '<br>';
    echo (new Date('2025-12-28'))->addYear(1); // '2026-12-28'
?> 
require_once 'interval.php';

    $date1 = new Date('2025-12-31');
    $date2 = new Date('2026-11-28');

    $interval = new Interval($date1, $date2);

    echo $interval->toDays();   // выведет разницу в днях
    echo $interval->toMonths(); // выведет разницу в месяцах
    echo $interval->toYears();  // выведет разницу в годах

?>