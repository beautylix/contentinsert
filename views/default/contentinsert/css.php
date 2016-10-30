<?php
	$topmob = elgg_get_plugin_setting('topmob','contentinsert');
	if($topmob == 'No')
	{
?>
	<style>
	@media screen and (max-width: 600px) {
		div.elgg-top-banner {
		display: none}
	}
	</style>
<?php
	}
?>




<style>
.elgg-top-banner{
	display: block;
	margin:0 auto;
	text-align: center
}
</style>


<?php
	$bcmob = elgg_get_plugin_setting('bcmob','contentinsert');
	if($bcmob == 'No')
	{
?>
	<style>
	@media (max-width: 600px) {
		div.elgg-banner-before-comments{
		display: none}
	}
	</style>
<?php
	}
?>


<style>
.elgg-banner-before-comments{
	display: block;
	margin: 0 auto;
	text-align: center
}
</style>

<?php
	$acmob = elgg_get_plugin_setting('acmob','contentinsert');
/**

function console_log( $acmob ){
  echo '<script>';
  echo 'console.log('. json_encode( $acmob ) .')';
  echo '</script>';
}

console_log($acmob);

**/


	if($acmob == 'No')
	{
?>
	<style>
	@media (max-width: 600px) {
		div.elgg-banner-after-comments{
		display: none}
	}
	</style>
<?php
	}
?>

<style>
.elgg-banner-after-comments{
	display: block;
	margin: 0 auto;
	text-align: center
}
</style>


<?php
	$stmob = elgg_get_plugin_setting('stmob','contentinsert');
	
	if($stmob == 'No')
	{
?>
	<style>
	@media (max-width:600px) {
		div.elgg-top-side-banner{
		display: none}
	}
	</style>
<?php
	}
?>

<style>
.elgg-top-side-banner{
	display: block;
	margin: 0 auto;
	text-align: center
}
</style>

<?php
	$sbmob = elgg_get_plugin_setting('sbmob','contentinsert');
	if($sbmob == 'No')
	{
?>
	<style>
	@media (max-width: 600px) {
		div.elgg-bottom-side-banner{
		display: none}
	}
	</style>
<?php
	}
?>


<style>
.elgg-bottom-side-banner{
	display: block;
	margin: 0  auto;
	text-align: center
}

</style>


<?php
        $sbmob = elgg_get_plugin_setting('fbmob','contentinsert');
        if($sbmob == 'No')
        {
?>
        <style>
        @media (max-width: 600px) {
                div.elgg-foot-banner{
                display: none}
        }
        </style>
<?php
        }
?>


<style>
.elgg-foot-banner{
        display: block;
        margin: 0  auto;
        text-align: center
}

</style>

