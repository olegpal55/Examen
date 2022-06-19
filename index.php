<?php
	require_once 'Form.php';
	require_once 'Input.php';
	require_once 'Submit.php';
	require_once 'pas.php';
	require_once 'Hidden.php';

	$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'GET']);

	echo $form->open();
		echo (new Input)   ->setAttr('name', 'login');
		echo (new pas)->setAttr('name', 'password');
		echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
		echo (new Input)->setAttr('name', 'year');
		echo new Submit;
	echo $form->close();
?>