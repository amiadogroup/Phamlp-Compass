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
 * Compass_Function_Operation class
 * 
 * @package PHamlP-Compass
 */
class Compass_Function_Operation {
        public static function _if($expression, $correct = null, $incorrect = null) {
                if((string) $expression == 'true') {
                        return new Phamlp_Sass_Script_Literal_String((string) $correct);
                } else {
                        return new Phamlp_Sass_Script_Literal_String((string) $incorrect);
                }
        }
}