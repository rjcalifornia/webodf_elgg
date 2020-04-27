<?php 


$text_viewer_setting = $vars['entity']->text_viewer_setting;
$odp_viewer_setting = $vars['entity']->odp_viewer_setting;
$sheets_viewer_setting = $vars['entity']->sheets_viewer_setting;

$pdf_viewer_setting = $vars['entity']->pdf_viewer_setting;


echo elgg_view_input('select',[
    
    'label' => elgg_echo('viewerjs:odt:setting'),
    'name' => 'params[text_viewer_setting]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('viewerjs:yes'),
                '2' => elgg_echo('viewerjs:no'),
                
                
        
	),
    'required' => true,
    'value' => $text_viewer_setting,
]);


echo elgg_view_input('select',[
    
    'label' => elgg_echo('viewerjs:pdf:setting'),
    'name' => 'params[pdf_viewer_setting]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('viewerjs:yes'),
                '2' => elgg_echo('viewerjs:no'),
                
                
        
	),
    'required' => true,
    'value' => $pdf_viewer_setting,
]);




echo elgg_view_input('select',[
    
    'label' => elgg_echo('viewerjs:odp:setting'),
    'name' => 'params[odp_viewer_setting]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('viewerjs:yes'),
                '2' => elgg_echo('viewerjs:no'),
                
                
        
	),
    'required' => true,
    'value' => $odp_viewer_setting,
]);


echo elgg_view_input('select',[
    
    'label' => elgg_echo('viewerjs:sheets:setting'),
    'name' => 'params[sheets_viewer_setting]',
    'options_values' => array(
                '0' => '',
		'1' => elgg_echo('viewerjs:yes'),
                '2' => elgg_echo('viewerjs:no'),
                
                
        
	),
    'required' => true,
    'value' => $sheets_viewer_setting,
]);



 







