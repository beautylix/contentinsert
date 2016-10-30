<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

	$sidebannertop = elgg_get_plugin_setting('sidebannertop', 'contentinsert');


	
	if (strlen(trim($sidebannertop)) >0) {
	echo "<div class = 'elgg-top-side-banner'>";
	echo $sidebannertop; 
	echo "</div>";
	}
	


