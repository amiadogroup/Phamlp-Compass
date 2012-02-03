<?php
/**
 * Phamlp Compass Extension
 * 
 * @author Jonatan Männchen <jonatan.maennchen@amiadogroup.com>
 * @copyright Copyright (c) 2012 Amiado Group AG
 * @license https://raw.github.com/amiado-maennchen/Phamlp-Compass/master/LICENCE
 * @package PHamlP-Compass
 */

/**
 * Compass_Function_Compact class
 * 
 * @package PHamlP-Compass
 */
class Compass_Function_Compact {
        public static function compact() {
                $list = array();
                foreach(func_get_args() as $item) {
                        if((string) $item != "false") {
                                $list[] = (string) $item;
                        }
                }
                return new Phamlp_Sass_Script_Literal_String(join(', ', $list));
        }
        
        public static function _compass_space_list() {
                $list = array();
                foreach(func_get_args() as $item) {
                        if((string) $item != "false") {
                                $list[] = implode(' ', explode(', ', $item));
                        }
                }
                return new Phamlp_Sass_Script_Literal_String(implode(' ', $list));
        }
}