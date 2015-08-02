<?php 
	class Timee{
		public $stime;
		public $etime;
		public $results;

		public function __construct(){
			
		}
		public function start_time(){
			$s_tmr = count($this->stime);
			$this->stime[$s_tmr++] = getrusage();
		}
		public function stop_time(){
			$e_tmr = count($this->etime);
			$this->etime[$e_tmr] = getrusage();
			$ctime = $this->calc_time($this->etime[$e_tmr], $this->stime[$e_tmr], "utime");
			$sctime = $this->calc_time($this->etime[$e_tmr], $this->stime[$e_tmr], "stime");
			$this->results[$e_tmr]['compute'] = $ctime." ms";
			$this->results[$e_tmr]['calls'] = $sctime." ms";

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