<?php
	$OB= new main();
	//first
	$OB -> e1('array_change_key_case()');
	$arr = array("Aca" => 1, "csaA" => 2);	
	$OB -> P2($arr);
	$OB -> e2('To upper_case');
	$OB -> P2( $OB-> ChgKeyCas($arr, CASE_UPPER));
	$OB -> e2('To lower_case');
	$OB -> P2( $OB-> ChgKeyCas($arr, CASE_LOWER));
	$OB -> e3();

	//second
	$OB -> e1('array_chunk()');
	$ar = array('1a','2a','3a'.'4a'.'5a');
	$OB -> P2($ar);
	$OB -> e2('chunk to 2');
	$OB -> P2( $OB -> Chu($ar, 2));
	$OB -> e3();

	
	echo '</ul>';
	
	class main{		
		public function __construct(){
                	echo '<h1 style="color:blue;font-size:40;font-family:calibri;">10 Array functions Practice</h1><ul>';
		}

		public function e1($stuff){
			echo "<li><h2>$stuff</h2></li>";
		}
		
		public function e2($stuff){
			echo "<blockquote>$stuff</blockquote>";
		}

		public function e3(){
			echo "<hr>";
		}

		public function P2($tem){
			print_r($tem);
		}
	
		public function ChgKeyCas($tem, $tem2){
			return array_change_key_case($tem, $tem2);
		}
	
		public function Chu($a,$b){
			return array_chunk($a,$b);
		}
		
		Public function __destruct(){}
	}
?>
	

