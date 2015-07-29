<?php 
	//code to include
	include("classes/timee.class.php");
	include("view/timee.html.php");
	$timee = new Timee();
	$view = new Timee_HTML($timee);
	
	//init
	$timee->start_time();

	//start of code to record
	$source_code = file_get_contents("http://www.in.gr/");
	echo strlen($source_code);
	//end of code to record
	
	//end
	$timee->stop_time();

	//show results
	echo ($view->results());
?>
