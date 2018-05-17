<?php
include 'vendor/autoload.php';

class PipitFA_Icons extends FontAwesomeSVG {

    public function __construct() {
        $this->svg_dir = PIPIT_FA_SVG_DIR;
    }

    public function get_svg_for_tag($Tag) {
        $opts = array();
        $attrs = $Tag->get_attributes();

        foreach($attrs as $key => $attr) {
            $value = $attr;
            if($attr === 'true') $value = true;
            if(!$attr) $value = false;
            
            $opts[$key] = $value;
        }

        return $this->get_svg($Tag->icon, $opts);
    }

}