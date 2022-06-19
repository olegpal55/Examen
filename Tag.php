<?php
	class Tag
	class Tag implements iTag
	{
		private $name;
		private $attrs = [];
		private $text = '';

		public function __construct($name)
		{
@@ -12,14 +13,22 @@ public function __construct($name)
		public function open()
		{
			$name = $this->name;
			return "<$name>";
			$attrsStr = $this->getAttrsStr($this->attrs);

			return "<$name$attrsStr>";
		}

		public function close()
		{
			$name = $this->name;
			return "</$name>";
		}

		public function show()
		{
			return $this->open() . $this->text . $this->close();
		}

		private function getAttrsStr($attrs)
	{
		if (!empty($attrs)) {
@@ -37,27 +46,34 @@ private function getAttrsStr($attrs)
		} else {
			return '';
		}
	}
	public function setAttr($name, $value)
	}

	public function setText($text)
		{
			$this->text = $text;
			return $this;
		}

	public function setAttr($name, $value = true)
		{
			$this->attrs[$name] = $value;
			return $this;
			return $this;
		}

	public function removeAttr($name)
		{
			if(array_key_exists($name, $this->attrs))
			{
			unset($this->attrs[$name]);
			}
		return $this;
			return $this;
		}

	public function setAttrs($attrs)
		{
			foreach ($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}
		return $this;
	}

	public function addClass($className)
	{
		if (isset($this->attrs['class'])) {
@@ -73,13 +89,15 @@ public function addClass($className)

		return $this;
	}

	private function removeElem($elem, $arr)
	{
		$key = array_search($elem, $arr); // находим ключ элемента по его тексту
		array_splice($arr, $key, 1); // удаляем элемент

		return $arr; // возвращаем измененный массив
	}

	public function removeClass($className)
	{
		if (isset($this->attrs['class'])) {
@@ -98,17 +116,25 @@ public function getName()
	{
		return $this->name;
	}

	public function getText()
	{
		return $this->text;
	}

	public function getAttrs()
	{
		return $this->attrs;
	}
	public function getAttr($attr)
	{
		return $this->attrs[$attr];
	}

	public function getAttr($name)
		{
			if (isset($this->attrs[$name])) {
				return $this->attrs[$name];
			} else {
				return null;
			}
		}

}
?>