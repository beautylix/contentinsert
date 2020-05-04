<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

        $publisherid = elgg_get_plugin_setting('publisherid', 'contentinsert');
        $headbanner = elgg_get_plugin_setting('headbanner', 'contentinsert');


	if (strlen(trim($publisherid)) >0) { ?>

<script data-ad-client="ca-pub-<?php echo $publisherid;?>" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<?php }

