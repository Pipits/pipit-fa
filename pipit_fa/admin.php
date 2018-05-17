<?php
    include(__DIR__.'/_version.php');
    
	if ($CurrentUser->logged_in() && $CurrentUser->has_priv('pipit_fa')) {
		$this->register_app('pipit_fa', 'Pipit Font Awesome', 99, 'Adds Font Awesome\'s inline SVG icons', PIPIT_FA_VERSION, true);
		$this->require_version('pipit_fa', '3.0');
		
		
		spl_autoload_register(function($class_name){
			if (strpos($class_name, 'PipitFA_')===0) {
				include(PERCH_PATH.'/addons/apps/pipit_fa/lib/'.$class_name.'.class.php');
				return true;
			}
			return false;
		});
		
		PerchSystem::register_template_handler('PipitFA_Template');

		$API  = new PerchAPI(1.0, 'pipit_fa');
		$Settings = $API->get('Settings');
	}