<?php
require_once 'tag.php';

	echo (new Tag('input'))->setAttr('name', 'name1')->open();
	echo (new Tag('input'))->setAttr('name', 'name2')->open();
	echo (new Tag('input'))
		->setAttr('class', 'eee zzz kkk') // добавим 3 класса
		->removeClass('zzz') // удалим класс 'zzz'
		->open(); // выведет <input class="eee kkk">
?>