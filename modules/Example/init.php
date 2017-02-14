<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Example initialisation file
 */

// Ensure module has been installed
$module_installed = $cache->retrieve('module_example');
if(!$module_installed){

} else {
	// Installed
}

define('EXAMPLE', true);

// Initialise example language
$example_language = new Language('modules/Example/languages', LANGUAGE);

// Define URLs which belong to this module
$pages->add('Example', '/example', 'pages/example.php');

// Add link to navbar
$navigation->add('example', $example_language->get('example', 'example'), URL::build('/example'));
