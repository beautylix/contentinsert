<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * @link http://www.cookact.com
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/
 
    function contentinsert_init()
    {

	
	// top banner
	elgg_extend_view('page/elements/header','contentinsert/topbanner');
	}
	// banner before comments
	elgg_extend_view('page/elements/comments', 'contentinsert/beforecomments', '1');

	//banner after comments
	elgg_extend_view('page/elements/comments', 'contentinsert/aftercomments', '501');
	
	// sbottom side banner
	elgg_extend_view('page/elements/sidebar', 'contentinsert/sidebanner', '501');

	//top side banner
	elgg_extend_view('page/elements/sidebar','contentinsert/sidebannertop', 1);
    

        //foot banner
        elgg_extend_view('page/elements/footer', 'contentinsert/footbanner',1);




	//need to run php
	elgg_extend_view('page/elements/footer', 'contentinsert/css',501);
	
	//can not run php
	//elgg_extend_view('elgg.css', 'contentinsert/css');
 
	elgg_register_event_handler('init','system','contentinsert_init');
 
?>
