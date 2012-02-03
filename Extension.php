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
 * Compass_Extension class
 * 
 * @package PHamlP-Compass
 */
class Compass_Extension extends Phamlp_Sass_Extension {
        /**
         * Construct with some Options
         *
         * @param mixed $options
         * @return void
         */
        public function __construct($options = null) {}
        
        /**
         * Delivers Framework-Path to Parser
         *
         * @return array
         */
        public function getFrameworkPaths() {
                return array(realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'frameworks'));
        }
        
        /**
         * Delivers Functions-Path to Parser
         * 
         * @example Return in this Format:
         * array<array<string Namespace, string Path>>
         * 
         * @return array
         */
        public function getFunctionsPaths() {
                return array('Compass_Function_' => realpath(dirname(__FILE__).DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'frameworks'.DIRECTORY_SEPARATOR.'Function'));
        }
}