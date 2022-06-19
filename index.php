<?php
require_once 'tag.php';

	$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
	echo $tag->open(); // выведет <input id="test" class="eee bbb">
	$tag = new Tag('input');
	echo $tag->setAttr('id', 'test')->setAttr('class', 'eee bbb')->open();
?>