<?php 
	class Timee_HTML {
		private $timee_model;
		public function __construct($model){
			$this->timee_model = $model;
		}

		public function results($result=null){
			return "<div class=\"timee_results\"><pre>".(isset($result) ? print_r($this->timee_model->results[$result-1],true) : print_r($this->timee_model->results,true))."</pre></div>";
		}
		public function __destruct(){
			unset($this->timee_model);
		}
	}
?>