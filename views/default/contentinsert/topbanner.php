<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $topbanner   = elgg_get_plugin_setting('topbanner',   'contentinsert');



	if (strlen(trim($topbanner)) >0) {
	echo "<div class = 'elgg-top-banner'>";
	echo $topbanner; 
	echo "</div>";
	}

	
