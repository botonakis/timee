<?php 
	class Timee_HTML {
		private $timee_model;
		public function __construct($model){
			$this->timee_model = $model;
		}

		public function results(){
			return "<div class=\"timee_results\"><pre>".print_r($this->timee_model->results,true)."</pre></div>";
		}
		public function __destruct(){
			unset($this->timee_model);
		}
	}
?>