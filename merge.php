<?php
$a = [6,4,2,5,9,8,3,1];

merge::ssort($a);

var_Dump($a);
exit;

class merge
{
	private static $aux;
	public static function ssort(&$a){
		$n = count($a);
		for($sz=1;$sz<$n;$sz=($sz+$sz)){
			for($l=0;$l<($n-$sz);$l+=($sz+$sz)){
				if(($l+$sz+$sz-1) < $n-1){
					$h = $l+$sz+$sz-1;
				}else{
					$h = $n-1;
				}
				self::_merge($a, $l, $l+$sz-1,$h);
			}
		}
	}
 
	private static function _merge(&$a , $l, $m, $h){
		$i = $l;
		$j = $m+1;
		
		self::$aux = $a;
		for($k=$l;$k<=$h;$k++){
			if($i > $m){
				$a[$k] = self::$aux[$j++];
			}
			elseif($j > $h){
				$a[$k] = self::$aux[$i++];
			}
			elseif(self::$aux[$j] < self::$aux[$i] ){
				$a[$k] = self::$aux[$j++];
			}	
			else{
				$a[$k] = self::$aux[$i++];
			}
		}
	}
}


?>
