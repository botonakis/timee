<?php 
	class Timee{
		public $stime;
		public $etime;
		public $results;

		public function __construct(){
			
		}
		public function start_time(){
			$this->stime = getrusage();
		}
		public function stop_time(){
			$this->etime = getrusage();
			$ctime = $this->calc_time($this->etime, $this->stime, "utime");
			$sctime = $this->calc_time($this->etime, $this->stime, "stime");
			$this->results['compute'] = $ctime." ms";
			$this->results['calls'] = $sctime." ms";
		}

		function calc_time($ru, $rus, $index) {
    		return ($ru["ru_$index.tv_sec"]*1000 + intval($ru["ru_$index.tv_usec"]/1000)) - ($rus["ru_$index.tv_sec"]*1000 + intval($rus["ru_$index.tv_usec"]/1000));
		}

		public function __destruct(){
			unset($this->stime);
			unset($this->etime);
			unset($this->results);
		}
	}
?>