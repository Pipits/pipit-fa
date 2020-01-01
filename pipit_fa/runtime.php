<?php
    spl_autoload_register(function($class_name){
        if (strpos($class_name, 'PipitFA_')===0) {
            include(PERCH_PATH.'/addons/apps/pipit_fa/lib/'.$class_name.'.class.php');
            return true;
        }
        return false;
    });
    
    PerchSystem::register_template_handler('PipitFA_Template');

    
    
    function pipit_fa_icon($icon, $opts=[], $return=false) {
        $Icons = new PipitFA_Icons();

        $icon = $Icons->get_svg($icon, $opts);

        if($return) return $icon;
        echo $icon;
    }