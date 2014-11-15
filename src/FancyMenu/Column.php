<?php
namespace Starx\Zf2FancyMenuBuilder;

use Starx\Zf2FancyMenuBuilder\Block;
use Starx\Zf2FancyMenuBuilder\Common;

class Column extends Common {
	protected $attributes = array("class" => "column");
	public $title;
	public $image;
	public $blocks;
	
	public function __construct($title, array $blocks = array()) {
		$this -> title = $title;
		$this -> blocks = $blocks;
	}
	
	public function newBlock($title, $content) {
		return $this -> blocks[] = new Block($title, $content);
	}
	
	public function addBlock(Block $block) {
		$this -> blocks[] = $block;
	}
	
	public function __toString() {
		$o = "<li".$this -> getAttributeHTML()."><h2>{$this -> title}</h2>";    		
		if($this -> image) $o .= "<a class=\"image\" style=\"background-image:url('{$this -> image}');\">{$this -> title}</a>";
		$o .= "<ul class=\"innerAccordian\">".implode("",$this -> blocks)."</ul>";
		$o .= "</li>";
		return $o;
	}	
}