<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

	$aftercomments = elgg_get_plugin_setting('aftercomments', 'contentinsert');


	
	if (strlen(trim($aftercomments)) >0) {
	echo "<div class = 'elgg-banner-after-comments'>";
	echo $aftercomments; 
	echo "</div>";
	}


