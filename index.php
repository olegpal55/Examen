<?php
	require_once 'Link.php';
	echo (new Link)->setAttr('href', '/php/56-78/index.php')->setText('index')->show();
	require_once 'HtmlList.php';
	$list = new HtmlList('ul');

	echo $list
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show();
?>