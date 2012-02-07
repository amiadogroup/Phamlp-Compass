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
class Compass_Function_CrossBrowser {
        public static function _webkit() {
                $args = func_get_args();
                return self::hack('webkit', $args);
        }
        public static function _o() {
                $args = func_get_args();
                return self::hack('o', $args);
        }
        public static function _owg() {
                $args = func_get_args();
                return self::hack('owg', $args);
        }
        public static function _ms() {
                $args = func_get_args();
                return self::hack('ms', $args);
        }
        
        /**
         * Output CrossBrowser Css3 Hacks
         *
         * @param string $browser
         * @param array $arguments
         * @return Phamlp_Sass_Script_Literal_String
         */
        private static function hack($browser, $arguments) {
                foreach($arguments as $item) {
                        if((string) $item != "false") {
                                $list[] = '-'.$browser.'-'.(string) $item;
                        }
                }
                return new Phamlp_Sass_Script_Literal_String(join(', ', $list));
        }
}
/*
-svg($images); background-size: 100%; }
  @if $support-for-original-webkit-gradients and prefixed(-owg,    $images) { background-image:    -owg($images); }
  @if $experimental-support-for-webkit       and prefixed(-webkit, $images) { background-image: -webkit($images); }
  @if $experimental-support-for-mozilla      and prefixed(-moz,    $images) { background-image:    -moz($images); }
  @if $experimental-support-for-opera        and prefixed(-o,      $images) { background-image:      -o($images); }
  @if $experimental-support-for-microsoft    and prefixed(-ms,     $images) { background-image:     -ms*/