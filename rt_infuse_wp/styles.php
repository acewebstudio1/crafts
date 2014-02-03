<?php

/* Infuse Template by RocketTheme
 * 
 * In this file you can define all the predefined styles that
 * you can find in the Admin CP, Template Manager.
 *
 */

global $stylesList;

class Style {
	var $pstyle = '';
	var $bgstyle = '';
	var $fontfamily = '';
	
	function __construct($pstyle, $bg, $font) {
		$this->pstyle= $pstyle;
		$this->bgstyle = $bg;
		$this->fontfamily = $font;
	}
	
	function Style($pstyle, $bg, $font) {
		$this->__construct($pstyle, $bg, $font);
	}
	
	function equals($styleObject){
		if (
			$this->pstyle != $styleObject->pstyle
			||
			$this->bgstyle != $styleObject->bgstyle
			||
			$this->fontfamily != $styleObject->fontfamily	
		)
		{
			return false;
		}
		return true;
	}
}

$stylesList = array(
	'style1'  => new Style('style1', 'full', 'infuse'),
	'style2'  => new Style('style2', 'full', 'optima'),
	'style3'  => new Style('style3', 'full', 'helvetica'),
	'style4'  => new Style('style4', 'full', 'georgia'),
	'style5'  => new Style('style5', 'full', 'continuum'),
	'style6'  => new Style('style6', 'full', 'geneva')
);


?>