<?php
namespace Starx\Zf2FancyMenuBuilder;

use Starx\Zf2FancyMenuBuilder\Common;

class Block extends Common {
	public $title;
	public $content;
	
	public function __construct($title, $content) {
		$this -> title = $title;
		$this -> content = $content;
	}
	public function __toString() {
		return "<li><h3>{$this -> title}</h3><div class=\"innerBlock\">{$this -> content}</div></li>";
	}
}