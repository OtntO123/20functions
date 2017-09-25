<?PHP
	$OB= new main();
	$OB -> AddSla('mWo\'ni{b]c}-d5+g`3,', 'A..z'); //1st
	$OB -> AdSlas("Hello w's your name?"); //2nd
	$OB -> BinHex('what is my bin?'); //3rd
	$OB -> Cho('Chopping what?xx xx', 'x'); //4th
	$OB -> ChrChr("65"); //5th
	$OB -> ChuSpl('wht is that?', 2, 'a'); //6th
	$OB -> CouCha('This is countchart function.', 1); //7th
	$OB -> CRCc32('This is a string'); //8th
	$OB -> Explod(' ', 'What would it be?'); //9th
	$OB -> Md5Md5('doc'); //10th

	echo '</ul>';

	class main{
	public function __construct(){
		echo '<h1 style="color:blue;font-size:40;font-family:calibri;">10 String
		functions Practice</h1><ul>';
		}
	public function e($a, $b, $c){
		echo "<li><h2>$a</h2></li>";
		echo "<blockquote>Origin:</blockquote>";
		echo "<blockquote>$b</blockquote>";
		echo "<blockquote>Result:</blockquote>";
		echo "<blockquote>$c</blockquote><hr>";
		}
	
	public function AddSla($a, $b){	
		$this -> e('addcslashed()', $a, addcslashes($a, $b));
		}
	
	public function AdSlas($a){
		$this -> e('addslashes()', $a, addslashes($a));
		}
	
	public function BinHex($a){
		$this -> e('bin2hex()', $a, bin2hex($a));
		}

	public function Cho($a, $b){
		$this -> e('chop()', $a, chop($a, $b));
		}
	
	public function ChrChr($a){
		$this -> e('chr()', $a, chr($a));
		}
	
	public function ChuSpl($a, $b, $c){
		$this -> e('chunk_split()', $a, chunk_split($a, $b ,$c));
		}

	public function CouCha($a, $b){
		$this -> e('count_chars()', $a, implode(",", count_chars($a, $b)));
		}

	public function Crcc32($a){
		$this -> e('crc32()', $a, crc32($a));
		}
	
	public function Explod($a, $b){
		explode($a, $b);
		$this -> e('explode()', $b, $b[0]);
		}

	public function Md5Md5($a){
		$this -> e('md5()', $a, md5($a));
		}

	public function __destruct(){}
	}
?>
