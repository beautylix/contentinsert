<?php

return [
	'plugin' => [
		'version' => '4.0',
	],
	'entities' => [
		[
			'type' => 'object',
			'subtype' => 'contentinsert',
			'class' => 'contentinsert',
		],
	],
	

	'view_extensions' => [
		'page/elements/head' => [
			'contentinsert/headbanner' => ['priority' => 400],
		],
		'page/elements/header' => [
			'contentinsert/topbanner' => ['priority' => 400],
		],
		'page/elements/comments' => [
			'contentinsert/beforecomments' => ['priority' => 1],
		],
		'page/elements/comments' => [
			'contentinsert/aftercomments' => ['priority' => 501],
		],		
		'page/elements/sidebar' => [
			'contentinsert/sidebannertop' => ['priority' => 1],
		],				
		'page/elements/sidebar' => [
			'contentinsert/sidebanner' => ['priority' => 501],
		],				
		'page/elements/footer' => [
			'contentinsert/footbanner' => ['priority' => 1],
		],				
		'page/elements/footer' => [
			'contentinsert/css' => ['priority' => 501],
		],						
		
	],
];
