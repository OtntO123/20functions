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

	//3rd
	$OB -> e1('array_column()');
	$ar = array(
			array(
	            	'No' => 1,
		    	'stuff' => 'Bag',
	            	'type' => 'black',
			),
			array(
 	            	'No' => 2,
			'stuff' => 'Cloth',
		    	'type' => 'yellow',
		    	),
			array(
			'No' => 3,
			'stuff' => 'Nike',
			'type' => 'blue',
			),
			array(
			'No' => 4,
			'stuff' => 'Hat',
			'type'  => 'white',
			)
	);
	$OB -> e2('Array');
	$OB -> P2($ar);
	$OB -> e2('Show stuff with type');
	$OB -> P2($OB -> Col($ar, 'type', 'stuff'));
	$OB -> e3();

	//4th
	$OB -> e1('array_combine');
	$ar1 = array('Hey', 'What\'s', 'It\'s');
	$ar2 = array('man', 'up', 'mine');
	$OB -> P2($ar1);
	$OB -> P2($ar2);
	$OB -> e2('Combine');
	$OB -> P2($OB -> Comb($ar1, $ar2));
	$OB -> e3();

	//5th
	$OB -> e1('array_count_values()');
	$ar = array(1,4,4,4,55,55,66,6,1,1,1,1,1,1,1,'w','w','w','w','w','d','g','b','ff','ff');
	$OB -> P2($ar);
	$OB -> e2('Result');
	$OB -> P2( $OB -> ConVal($ar));
	$OB -> e3();

	//6th
	$OB -> e1('array_diff_assoc');
	$ar1 = array('c'=>'apple', 'd' => 'dark', 0, 'good');
	$ar2 = array('c'=>'apple', 'dark', 'good','0'=>0);
	$OB -> P2($ar1);
	$OB -> P2($ar2);
	$OB -> e2('Result');
	$OB -> P2( $OB -> DifAss($ar1, $ar2));
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
		
		public function Col($a,$b,$c){
			return array_column($a,$b,$c);
		}

		public function Comb($a, $b){
			return array_combine($a, $b);
		}

		public function ConVal($a){
			return array_count_values($a);
		}

		public function DifAss($a, $b){
			return array_diff_assoc($a, $b);
		}

		public function __destruct(){}
	}
?>
	

