<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

	$aftercomments_setting = elgg_get_plugin_setting('aftercomments', 'contentinsert');
        $publisherid = elgg_get_plugin_setting('publisherid', 'contentinsert');
        $slotnumber = elgg_get_plugin_setting('slotnumber', 'contentinsert');



	
if ($aftercomments_setting == 1) {
	echo "<div class = 'elgg-banner-after-comments'>";
?>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-<?php echo $publisherid;?>"
     data-ad-slot="<?php echo $slotnumber;?>"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


<?php	echo "</div>";
	}


