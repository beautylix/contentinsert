<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

	$beforecomments = elgg_get_plugin_setting('beforecomments', 'contentinsert');


	
	if (strlen(trim($beforecomments)) >0) {
	echo "<div class = 'elgg-banner-before-comments'>";
	echo $beforecomments; 
	echo "</div>";
	}
	


