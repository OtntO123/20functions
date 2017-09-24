<?PHP
	$O= new main();
	//1st
	$O -> e1('addcslashes()');
	$s = '1,al /?\'h[s{g]g|`s!ad';
	$O -> e2($s);
	$O -> e2('Result');
	$O -> e2( $O -> AddSla($s, 'A..z'));
	$O -> e3();

        //
	$O -> e1('addcslashes()');
	$s = '1,al /?\'h[s{g]g|`s!ad';
	$O -> e2($s);
	$O -> e2('Result');
	$O -> e2();
	$O -> e3();



	echo '</ul>';

	class main{
	public function __construct(){
		echo '<h1 style="color:blue;font-size:40;font-family:calibri;">10 String
		functions Practice</h1><ul>';
		}
	public function e1($a){
		echo "<li><h2>$a</h2></li>";	
		}
	Public function e2($a){
		echo "<blockquote>$stuff</blockquote>";
		}
	public function e3(){
		echo "<hr>";
		}
	public function AddSla($a, $b){
		return addcslashes($a, $b);
		}
		



	public function __destruct(){}
	}
?>
