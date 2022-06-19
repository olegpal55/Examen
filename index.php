<?php
	require_once 'HtmlList.php';
	require_once 'ClassUL.php';
	require_once 'ClassOl.php';
	$ul = new Ul;
	$ol = new Ol;

	echo $ol
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show();
	require_once 'Form.php';

	echo '<br>';
	echo $ul
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show();
	$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'POST']);

	echo $form->open();

	echo $form->close();
?>