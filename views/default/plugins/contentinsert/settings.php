<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/
        $publisherid = $vars['entity']->publisherid;
        $slotnumber = $vars['entity']->slotnumber;

	$headbanner = $vars['entity']->headbanner;
	$topbanner = $vars['entity']->topbanner;
	$beforecomments = $vars['entity']->beforecomments;
	$aftercomments = $vars['entity']->aftercomments;
	$sidebanner = $vars['entity']->sidebanner;
	$sidebannertop = $vars['entity']->sidebannertop;
        $trackid = $vars['entity']->trackid;


        $topmob = elgg_get_plugin_setting('topmob','contentinsert');
        if (!$topmob) {
                $topmob = 'yes';
                elgg_set_plugin_setting('topmob',$topmob,'contentinsert');
        }



	$bcmob = elgg_get_plugin_setting('bcmob','contentinsert');
	if (!$bcmob) {
		$bcmob = 'yes';
		elgg_set_plugin_setting('bcmob',$bcmob,'contentinsert');
	}


        $acmob = elgg_get_plugin_setting('acmob','contentinsert');
        if (!$acmob) {
                $acmob = 'yes';
                elgg_set_plugin_setting('acmob',$acmob,'contentinsert');
        }


        $stmob = elgg_get_plugin_setting('stmob','contentinsert');
        if (!$stmob) {
                $stmob = 'yes';
                elgg_set_plugin_setting('stmob',$stmob,'contentinsert');
        }


        $sbmob = elgg_get_plugin_setting('sbmob','contentinsert');
        if (!$sbmob) {
                $sbmob = 'yes';
                elgg_set_plugin_setting('sbmob',$sbmob,'contentinsert');
        }


        $fbmob = elgg_get_plugin_setting('fbmob','contentinsert');
        if (!$fbmob) {
                $fbmob = 'yes';
                elgg_set_plugin_setting('fbmob',$fbmob,'contentinsert');
        }

//enter publisher ID and slot number


 echo elgg_echo('contentinsert:lblpublisherid');

                echo elgg_view('input/text', array(
                              'name'=> 'params[publisherid]',
                              'value' => $publisherid));
                          echo "<p> </p>";


 echo elgg_echo('contentinsert:lblslotnumber');

                echo elgg_view('input/text', array(
                              'name'=> 'params[slotnumber]',
                              'value' => $slotnumber));
                          echo "<p> </p>";




//top banner begin

 echo elgg_echo('contentinsert:lbltopbanner'); 

                echo elgg_view('input/text', array(
                              'name'=> 'params[topbanner]',
                              'value' => $topbanner));
                          echo "<p> </p>";



echo elgg_echo('contentinsert:mobileshow:description');


	 echo elgg_view('input/radio',array(
        'name'=>'params[topmob]',
        'value'=> $topmob,
        'options'=>array(
                                'yes' => elgg_echo('option:yes'),
                                'no' => elgg_echo('option:no'),
),
		
)); 

echo "<p></p>";
			  
//top banner end	


//banner before comments  begin

		echo elgg_echo('contentinsert:lblbeforecomments'); 
		
                echo elgg_view('input/text', array(
                              'name'=> 'params[beforecomments]',
                              'value' => $beforecomments));
                          echo "<p> </p>";


		echo elgg_echo('contentinsert:mobileshow:description');
		
	 

	 echo elgg_view('input/radio',array(
        'name'=>'params[bcmob]',
        'value'=> $bcmob,
        'options'=>array(
                                'yes' => elgg_echo('option:yes'),
                                'no' => elgg_echo('option:no'),
),
		)); 

echo "<p></p>";

//banner before comments end
			  
		  

//banner after comment begin
	echo elgg_echo('contentinsert:lblaftercomments'); 

                echo elgg_view('input/text', array(
                           'name' => 'params[aftercomments]',
                              'value' => $aftercomments));


	echo elgg_echo('contentinsert:mobileshow:description');		
		  

	 echo elgg_view('input/radio',array(
        'name'=>'params[acmob]',
        'value'=> $acmob,
        'options'=>array(
                                'yes' => elgg_echo('option:yes'),
                                'no' => elgg_echo('option:no'),
),

		)); 
		  
			   echo "<p> </p>";
			   
//banner after comment end			   

//top side banner begin

   echo elgg_echo('contentinsert:lblsidebannertop'); 
	
echo elgg_view('input/text', array(
                              'name' => 'params[sidebannertop]',
                              'value' => $sidebannertop));

	echo elgg_echo('contentinsert:mobileshow:description');		
		  

	 echo elgg_view('input/radio',array(
        'name'=>'params[stmob]',
        'value'=> $stmob,
        'options'=>array(
                                'yes' => elgg_echo('option:yes'),
                                'no' => elgg_echo('option:no'),
),
		
)); 			  
				  
			   echo "<p> </p>";
			   
//top side banner end			   

//bottom side banner begin
			   
echo elgg_echo('contentinsert:lblsidebanner'); 

echo elgg_view('input/text', array(
                              'name' => 'params[sidebanner]',
                              'value' => $sidebanner));


echo elgg_echo('contentinsert:mobileshow:description');		
		  

	 echo elgg_view('input/radio',array(
        'name'=>'params[sbmob]',
        'value'=> $sbmob,
        'options'=>array(
                                'yes' => elgg_echo('option:yes'),
                                'no' => elgg_echo('option:no'),
),
		
)); 
		
			   echo "<p> </p>";
			   

//bottom side banner end


//foot banner begin

echo elgg_echo ('contentinsert:lbltrackid');
echo elgg_view('input/text', array(
                              'name' => 'params[trackid]',
                              'value' => $trackid));
                              echo "<p></p>";

//foot banner end

