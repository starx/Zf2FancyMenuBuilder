<?php
namespace Starx\Zf2FancyMenuBuilder;

Class Common {	
	protected $attributes = array();
	
	public function setAttribute($var, $val) {
		$this -> attributes[$var] = $val;
	}
	
	protected function getAttributeHTML() {
		$o = "";
		if(count($this -> attributes) == 0) return $o;
		foreach($this -> attributes as $key => $val) {
			$o .= " $key = \"$val\"";
		}
		return $o;
	}
}