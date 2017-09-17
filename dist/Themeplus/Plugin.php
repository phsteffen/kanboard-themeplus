<?php

namespace Kanboard\Plugin\Themeplus;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
	public function initialize()
	{

		global $themePlusConfig;


		// Check if config.php is exist
		// If not, get the default-Values
		if (file_exists('plugins/Themeplus/config.php')) {
			require_once('plugins/Themeplus/config.php');
		} else {
			$themePlusConfig['theme'] = 'default';
		}



		// Add additional CSS-File in Header and
        // change the favicon or apple-touch-icons
		$this->template->hook->attach('template:layout:head', 'themeplus:layout/head');



		// Change the login-Page
		if (isset($themePlusConfig['login-logo'])) {
			$this->template->hook->attach('template:auth:login-form:before', 'themeplus:layout/logintop');
		}
		if (isset($themePlusConfig['login-link'])) {
			$this->template->hook->attach('template:auth:login-form:after', 'themeplus:layout/loginbottom');
		}



		// Change the Header for add Logo
		if (isset($themePlusConfig['logo'])) {
			$this->template->setTemplateOverride('header/title', 'themeplus:layout/header/title');
		}


	}




	public function getPluginName()	{ 		 return 'Theme Plus'; }
	public function getPluginAuthor() { 	 return 'Philip Steffen'; }
	public function getPluginVersion() { 	 return '0.3.0 beta'; }
	public function getPluginDescription() { return 'Improved and expanded theme'; }
	public function getPluginHomepage() { 	 return 'https://github.com/phsteffen/kanboard-themeplus'; }


}
