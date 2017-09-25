<?PHP
	$OB= new main();
	//1st
	$OB -> AddSla('1w [w]1', 'w');







	echo '</ul>';

	class main{
	public function __construct(){
		echo '<h1 style="color:blue;font-size:40;font-family:calibri;">10 String
		functions Practice</h1><ul>';
		}
	public function e($d, $e, $f){
		echo "<li><h2>$d</h2></li>";
		echo "<blockquote>$e</blockquote>";
		echo "<blockquote>Result</blockquote>";
		echo "<blockquote>$f</blockquote><hr>";
		}
	
	public function AddSla($a, $b){	
		$this -> e('addcslashed()', $a, addcslashes($a, $b));
		}
	



	public function __destruct(){}
	}
?>
