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
			$this->template->setTemplateOverride('header/title', 'themeplus:layout/header/title');
		}
        
        // Change the options
		if (isset($themePlusConfig['user'])) {
			$this->template->setTemplateOverride('header/user_dropdown', 'themeplus:layout/header/user_dropdown');
		}
        
        // Change the options
		if (isset($themePlusConfig['notifications'])) {
			$this->template->setTemplateOverride('header/user_notification', 'themeplus:layout/header/user_notification');
		}
        
        // Change the options
		if (isset($themePlusConfig['creation'])) {
			$this->template->setTemplateOverride('header/creation_dropdown', 'themeplus:layout/header/creation_dropdown');
		}
        
        // Change the options
		if (isset($themePlusConfig['usericons'])) {
			$this->template->setTemplateOverride('user_list/user_icons', 'themeplus:layout/user_icons');
		}
        
        // Change the dashboard
		if (isset($themePlusConfig['dashboard'])) {
			$this->template->setTemplateOverride('dashboard/layout', 'themeplus:layout/dashboard');
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




	public function getPluginName()	{ 		 return 'Theme Plus - Custom by Dataprev 🤘🏾'; }
	public function getPluginAuthor() { 	 return 'Decio Benicio, Fabiano Rodrigues'; }
	public function getPluginVersion() { 	 return '0.1.0 alpha'; }
	public function getPluginDescription() { return 'A fork from Philip Steffen - Original Plugin Theme Plus'; }
//	public function getPluginHomepage() { 	 return 'https://github.com/phsteffen/kanboard-themeplus'; }


}
