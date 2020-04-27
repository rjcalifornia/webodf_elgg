<?php
/**
 * First, get Publisher ID, URL and Setting
 */

$viewer_setting = elgg_get_plugin_setting('text_viewer_setting', 'webodf_elgg'); 
$js_url = elgg_get_site_url();
$file = get_entity($vars['entity']->getGUID());
$download_url = elgg_get_download_url($file);





if ($viewer_setting == 1)
{

	echo <<<HTML
<div class="file-photo">

<iframe src = "$js_url/mod/webodf_elgg/vendors/ViewerJS/#$download_url" width='700' height='550' allowfullscreen webkitallowfullscreen></iframe>

</div>


HTML;

}
 

