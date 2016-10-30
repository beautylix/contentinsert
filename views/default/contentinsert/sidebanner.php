<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $sidebanner = elgg_get_plugin_setting('sidebanner', 'contentinsert');

	
	if (strlen(trim($sidebanner)) >0) {
	echo "<div class = 'elgg-bottom-side-banner'>";
	echo $sidebanner; 
	echo "</div>";
	}
	


