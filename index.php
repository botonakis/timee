<?php 
	//code to include
	include("classes/timee.class.php");
	include("view/timee.html.php");
	$timee = new Timee();
	$view = new Timee_HTML($timee);
	
	//init #1
	$timee->start_time();
	//start of code to record #1
	$source_code = file_get_contents("http://www.in.gr/");
	echo strlen($source_code)."<br/>";
	//end of code to record #1
	//end #1
	$timee->stop_time();


	//init #2
	$timee->start_time();
	//start of code to record #2
	$source_code = file_get_contents("http://www.bahn.de/");
	echo strlen($source_code)."<br/>";
	//end of code to record #2
	//end #2
	$timee->stop_time();


	//init #3
	$timee->start_time();
	//start of code to record #3
	$source_code = file_get_contents("http://www.facebook.com/");
	echo strlen($source_code)."<br/>";
	//end of code to record #3
	//end #3
	$timee->stop_time();

	//show summary results
	echo ($view->results());



	//show only 2nd result
	echo ($view->results(2));
?>