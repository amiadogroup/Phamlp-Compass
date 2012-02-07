<?php
/* SVN FILE: $Id: Phamlp_Sass_Script_Literal_Boolean.php 49 2010-04-04 10:51:24Z chris.l.yates $ */
/**
 * Compass extension SassScript image size functions class file.
 * @author			Chris Yates <chris.l.yates@gmail.com>
 * @copyright 	Copyright (c) 2010 PBM Web Development
 * @license			http://phamlp.googlecode.com/files/license.txt
 * @package			PHamlP
 * @subpackage	Sass.extensions.compass.functions
 */
 
/**
 * Compass extension SassScript image size functions class.
 * A collection of functions for use in SassSCript.
 * @package			PHamlP
 * @subpackage	Sass.extensions.compass.functions
 */
class Compass_Function_ImageSize {
	# Returns the $width of the image relative to the images directory
	public function image_width($image_file) {
		$image_size = getimagesize(self::real_path($image_file));
		return new Phamlp_Sass_Script_Literal_Number($image_size[0].'px');
	}

	# Returns the height of the image relative to the images directory
	public function image_height($image_file) {
		$image_size = getimagesize(self::real_path($image_file));
		return new Phamlp_Sass_Script_Literal_Number($image_size[1].'px');
	}

	protected function real_path($image_file) {
		$path = $image_file->value;
		# Compute the real path to the image on the file stystem if the images_dir is set.
		if (Compass_Config::config('images_path'))
			return Compass_Config::config('images_path').DIRECTORY_SEPARATOR.$path;
		else
			return Compass_Config::config('project_path').DIRECTORY_SEPARATOR.$path;
	}
}