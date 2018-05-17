<?php

class PipitFA_Template extends PerchAPI_TemplateHandler
{
    public $tag_mask = 'fa';
	
    public function render($vars, $html, $Template)
    {
		if(strpos($html, 'perch:fa') !== false)
		{
            $Icons = new PipitFA_Icons();
            $icons = array();
            
            $tags = $Template->find_all_tags('fa');
            
            // $Tag is a PerchXMLTag
            foreach($tags as $Tag) {
                $icons[$Tag->id] = $Icons->get_svg_for_tag($Tag);
            }

			$html = $Template->replace_content_tags('fa', $icons, $html);
		}
		
        return $html;
    }

    public function render_runtime($html, $Template)
    {
        return $html;
    }
}