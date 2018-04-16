<?php

/*******************************************************************/
/* Rename this file to config.php if you want to change the values */
/*******************************************************************/

// Change the theme in the plugin
// 'default' = Default theme of kanboard with visual improvements
// 'dark'    = A dark theme
// ''        = No theme - for example if you want to integrate your own css-file, not based on the improvements
$themePlusConfig['theme'] = '';

// Add your own css-file
// Just copy the file in the "Css"-directory in the plugin-directory and
// uncomment the next line and perhaps customize the css-filename.
$themePlusConfig['css'] = 'gray-theme.css';
$themePlusConfig['libicons'] = 'libicons.css';

// Add your logo on the login-page
// Just copy your logo-file in the "assets/img"-directory in the plugin-directory and
// uncomment the next line.
$themePlusConfig['login-logo'] = 'login-logo.png';
// Uncomment, if you want to link your logo to your domain
//$themePlusConfig['login-logo-link'] = 'https://www.example.com';

// Add one or more links on the login-page
// For example for an imprint-link
// Just uncomment the next lines and customize the text.
/*
$themePlusConfig['login-link'][] = array(
	'Impress', // Name of the link
	'https://www.example.com/impress', // Link
	'_blank'); // Open the link in a new tab. With '' the link open in the same tab
*/
/*
// You can add more than one link...
$themePlusConfig['login-link'][] = array(
	'Organisation Name',
	'https://www.example.com',
	'_blank');
*/

// Replace the KB-logo with your own logo
// Just copy your logo-file in the "assets/img"-directory in the plugin-directory and
// uncomment the next line. The file should be not to height -
// perhaps 23 Pixel is a good height.
$themePlusConfig['logo'] = 'logo.png';
$themePlusConfig['user'] = '';
$themePlusConfig['creation'] = '';
$themePlusConfig['notifications'] = '';
$themePlusConfig['usericons'] = '';
$themePlusConfig['dashboard'] = '';
$themePlusConfig['js'] = 'kb-scripts.js';

// Replace the favicon and apple-touch-icons with your own favicon and icons
// Just copy your favicon in the "assets/img"-directory in the plugin-directory and
// uncomment the next line.
// For the apple-touch-icons do the same.

$themePlusConfig['favicon'] = 'favicon.png';
$themePlusConfig['apple-touch-icon'] = 'touch-icon-iphone.png';
$themePlusConfig['apple-touch-icon72x72'] = 'touch-icon-ipad.png';
$themePlusConfig['apple-touch-icon114x114'] = 'touch-icon-iphone-retina.png';
$themePlusConfig['apple-touch-icon144x144'] = 'touch-icon-ipad-retina.png';
