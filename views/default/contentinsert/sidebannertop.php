<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

	$sidebannertop_setting = elgg_get_plugin_setting('sidebannertop', 'contentinsert');
        $publisherid = elgg_get_plugin_setting('publisherid', 'contentinsert');
        $slotnumber = elgg_get_plugin_setting('slotnumber', 'contentinsert');



	
if ($sidebannertop_setting == 1) {
	echo "<div class = 'elgg-banner-after-comments'>";
?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-<?php echo $publisherid;?>"
     crossorigin="anonymous"></script>

<?php	echo "</div>";
	}


