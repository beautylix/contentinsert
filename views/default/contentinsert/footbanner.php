<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $footbanner = elgg_get_plugin_setting('footbanner', 'contentinsert');

	
	if (strlen(trim($footbanner)) >0) {
	echo "<div class = 'elgg-foot-banner'>";
	echo $footbanner; 
	echo "</div>";
	}
	


