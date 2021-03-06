<?php
/* SVN FILE: $Id: Phamlp_Sass_Script_Literal_Boolean.php 49 2010-04-04 10:51:24Z chris.l.yates $ */
/**
 * Compass extension SassScript font files functions class file.
 * @author			Chris Yates <chris.l.yates@gmail.com>
 * @copyright 	Copyright (c) 2010 PBM Web Development
 * @license			http://phamlp.googlecode.com/files/license.txt
 * @package			PHamlP
 * @subpackage	Sass.extensions.compass.functions
 */
 
/**
 * Compass extension SassScript font files functions class.
 * A collection of functions for use in SassSCript.
 * @package			PHamlP
 * @subpackage	Sass.extensions.compass.functions
 */
class Compass_Function_FontFiles {
	public function font_files() {
		if (func_num_args() % 2)
			throw new Phamlp_Sass_Script_FunctionException('An even number of arguments must be passed to font_files()', array(), Phamlp_Sass_Script_Parser::$context->node);

		$args = func_get_args();
		$files = array();
		while ($args) {
			$files[] = '#{font_url('.array_shift($args)."} format('".array_shift($args)."')";
		}
		return new Phamlp_Sass_Script_Literal_String(join(", ", $files));
	}
}