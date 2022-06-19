<?php
require_once 'date.php';
require_once 'interval.php';
require_once 'iFile.php';
require_once 'File.php';

	$date1 = new Date('2025-12-31');
	$date2 = new Date('2026-11-28');
	$file = new File('index.php');

echo $file->getPath().'<br>';
echo $file->getDir().'<br>';
echo $file->getExt().'<br>';
echo $file->getName().'<br>';
echo $file->getSize().' байт'.'<br>';

echo $file->getText();

	$interval = new Interval($date1, $date2);

	echo $interval->toDays();   // выведет разницу в днях
	echo '<br>';
	echo $interval->toMonths(); // выведет разницу в месяцах
	echo '<br>';
	echo $interval->toYears();  // выведет разницу в годах
?>zxa