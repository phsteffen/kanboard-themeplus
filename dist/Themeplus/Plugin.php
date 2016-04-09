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



		// Add additional CSS-File in Header
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
			$this->template->setTemplateOverride('header', 'themeplus:layout/header');
		}



		// Change the favicon or apple-touch-icons
		if (isset($themePlusConfig['favicon']) ||
			isset($themePlusConfig['apple-touch-icon']) ||
			isset($themePlusConfig['apple-touch-icon72x72']) ||
			isset($themePlusConfig['apple-touch-icon114x114']) ||
			isset($themePlusConfig['apple-touch-icon144x144'])) {
			$this->template->setTemplateOverride('layout', 'themeplus:layout/layout');
		}


	}




	public function getPluginName()	{ 		 return 'Theme Plus'; }
	public function getPluginAuthor() { 	 return 'Philip Steffen'; }
	public function getPluginVersion() { 	 return '0.1.0 alpha'; }
	public function getPluginDescription() { return 'Improved and expanded theme'; }
	public function getPluginHomepage() { 	 return 'https://github.com/phsteffen/kanboard-themeplus'; }


}
