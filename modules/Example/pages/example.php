<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr2
 *
 *  License: MIT
 *
 *  Example page
 */
 
define('PAGE', 'example');
?>
<!DOCTYPE html>
<html lang="<?php echo (defined('HTML_LANG') ? HTML_LANG : 'en'); ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Example NamelessMC module">

	<?php if(isset($custom_meta)){ echo $custom_meta; } ?>
	
	<?php
	// Generate header and navbar content
	// Page title
	$title = $example_language->get('example', 'example');
	
	require('core/templates/header.php'); 
	?>

  </head>

  <body>
	<?php 
	require('core/templates/navbar.php'); 
	require('core/templates/footer.php'); 
	
	// Display template
	$smarty->display('custom/templates/' . TEMPLATE . '/example/example.tpl'); 
	
	require('core/templates/scripts.php');
	?>
  </body>
</html>