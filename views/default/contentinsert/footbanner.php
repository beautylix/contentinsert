<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com/
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/

    $trackid = elgg_get_plugin_setting('trackid', 'contentinsert');

	
	if (strlen(trim($trackid)) >0) {
 ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $trackid;?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $trackid;?>');
</script>



<?php } ?>
	


