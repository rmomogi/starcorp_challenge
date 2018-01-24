<?php

	class NumberDivider{

		private $divider;
		private $message;

		function __construct($divider, $message){
			$this->divider = $divider;
			$this->message = $message;
		}

		public function validation($number){
			return ($number % $this->divider == 0 ? $this->message : null);
		}

	}

	class NumberDividerFactory{	

		private $dividers = [];

		function __construct(){
			array_push($this->dividers, new NumberDivider(3, 'Linio'));
			array_push($this->dividers, new NumberDivider(5, 'IT'));
			array_push($this->dividers, new NumberDivider(15, 'Linianos'));
		}

		public function validation($number){
			$message = "$number";
			foreach($this->dividers as $divider){
				$value = $divider->validation($number);
				$message = is_null($value) ? $message : $value;
			}

			echo $message.PHP_EOL;
		}

	}

	class Challenge{
		
		function __construct(){		
			$numberFactory = new NumberDividerFactory();

			foreach(range(1, 100) as $number){				
				$numberFactory->validation($number);
			}
		}

	}

	new Challenge();
?>