<?php
namespace Starx\Zf2FancyMenuBuilder;

class FancyMenu {
	public $columns;
	
	public function newColumn($title, $blocks) {
		return $this -> columns[] = new Column($title, $blocks);	
	}
	
	public function addColumn(Column $column) {
		$this -> columns[] = $column;
	}
	
	public function __toString() {
		return "<ul class=\"columns\">".implode('',$this -> columns)."</ul>";
	}
}