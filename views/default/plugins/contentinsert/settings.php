<?php

/* ***********************************************************************
 * @author : Tiby Wang
 * Under this agreement, No one has rights to sell this script further.
 * ***********************************************************************/
     $publisherid = $vars['entity']->publisherid;
     $slotnumber = $vars['entity']->slotnumber;
	 $trackid = $vars['entity']->trackid;

	$headbanner_setting = $vars['entity']->headbanner;
	$topbanner_setting = $vars['entity']->topbanner;
	$beforecomments_setting = $vars['entity']->beforecomments;
	$aftercomments_setting = $vars['entity']->aftercomments;
	$sidebanner_setting = $vars['entity']->sidebanner;
	$sidebannertop_setting = $vars['entity']->sidebannertop;
	
    $topmob = $vars['entity']->topmob;
	$bcmob = $vars['entity']->bcmob;
	$acmob = $vars['entity']->acmob;
	$stmob = $vars['entity']->stmob;
	$sbmob = $vars['entity']->sbmob;
	$fbmob = $vars['entity']->fbmob;

	
//enter publisher ID and slot number


 echo elgg_echo('contentinsert:lblpublisherid');

                echo elgg_view('input/text', array(
                              'name'=> 'params[publisherid]',
                              'value' => $publisherid));
                          echo "  ";


 echo elgg_echo('contentinsert:lblslotnumber');

                echo elgg_view('input/text', array(
                              'name'=> 'params[slotnumber]',
                              'value' => $slotnumber));
                          echo "<p> </p>";




//top banner begin

 echo elgg_echo('contentinsert:lbltopbanner'); 

                echo elgg_view('input/dropdown', [
                              'name'=> 'params[topbanner]',
							  'options_values'=> ['1'=>'Yes','2'=>'No'],
                              'value' => $topbanner_setting]);
                          echo "  ";



echo elgg_echo('contentinsert:mobileshow:description');


	 echo elgg_view('input/dropdown', [
        'name'=>'params[topmob]',
		 'options_values'=> ['1'=>'Yes','2'=>'No'],
        'value'=> $topmob]); 

echo "<p></p>";
			  
//top banner end	


//banner before comments  begin

		echo elgg_echo('contentinsert:lblbeforecomments'); 
		
                echo elgg_view('input/dropdown', [
                              'name'=> 'params[beforecomments]',
							   'options_values'=> ['1'=>'Yes','2'=>'No'],
                              'value' => $beforecomments_setting]);
                          echo "  ";


		echo elgg_echo('contentinsert:mobileshow:description');
		
	 
	 echo elgg_view('input/dropdown', [
        'name'=>'params[bcmob]',
		 'options_values'=> ['1'=>'Yes','2'=>'No'],
        'value'=> $bcmob]); 

echo "<p></p>";

//banner before comments end
			  
		  

//banner after comment begin
	echo elgg_echo('contentinsert:lblaftercomments'); 

                echo elgg_view('input/dropdown', [
                           'name' => 'params[aftercomments]',
						    'options_values'=> ['1'=>'Yes','2'=>'No'],
                             'value' => $aftercomments_setting]);
							 echo "  ";


	echo elgg_echo('contentinsert:mobileshow:description');		
		  

	 echo elgg_view('input/dropdown', [
        'name'=>'params[acmob]',
		 'options_values'=> ['1'=>'Yes','2'=>'No'],
        'value'=> $acmob]); 
		  
			   echo "<p> </p>";
			   
//banner after comment end			   

//top side banner begin

   echo elgg_echo('contentinsert:lblsidebannertop'); 
	
echo elgg_view('input/dropdown', [
                              'name' => 'params[sidebannertop]',
							   'options_values'=> ['1'=>'Yes','2'=>'No'],
                              'value' => $sidebannertop_setting]);
							  echo "  ";

	echo elgg_echo('contentinsert:mobileshow:description');		
		  

	 echo elgg_view('input/dropdown', [
        'name'=>'params[stmob]',
		 'options_values'=> ['1'=>'Yes','2'=>'No'],
        'value'=> $stmob]); 			  
				  
			   echo "<p> </p>";
			   
//top side banner end			   

//bottom side banner begin
			   
echo elgg_echo('contentinsert:lblsidebanner'); 

echo elgg_view('input/dropdown', [
                              'name' => 'params[sidebanner]',
							   'options_values'=> ['1'=>'Yes','2'=>'No'],
                              'value' => $sidebanner_setting]);
							  echo "  ";


echo elgg_echo('contentinsert:mobileshow:description');		
		  

	 echo elgg_view('input/dropdown', [
        'name'=>'params[sbmob]',
		 'options_values'=> ['1'=>'Yes','2'=>'No'],
        'value'=> $sbmob]); 
		
			   echo "<p> </p>";
			   

//bottom side banner end


//foot banner begin

echo elgg_echo ('contentinsert:lbltrackid');
echo elgg_view('input/text', array(
                              'name' => 'params[trackid]',
                              'value' => $trackid));
                              echo "<p></p>";

//foot banner end

