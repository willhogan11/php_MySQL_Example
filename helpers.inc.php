<?php
// helpers.inc.php helper functions. 
function html($text)
{	// Function to convert a string to clean HTML;
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
function htmlout($text) 
{	// Function to echo out clean HTML; bascially a function calling another function;
	echo html($text);
}
?>