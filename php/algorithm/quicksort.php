<?php
//$a = [6,4,2,5,9,8,1,3];
$a = [6,4,2,5,9,8,3,1];
quicksort($a, 0, count($a)-1);
var_dump($a);exit;

function quicksort(&$a, $p, $q)
{
	if($p < $q)
	{	
		$i = partition($a, $p, $q);
		quicksort($a, $p, $i-1);
		quicksort($a, $i+1, $q);
	}
}

function partition(&$a, $p, $q)
{
	$x = $a[$q];
	$i = $p - 1;
	for($j=$p;$j<=$q-1;$j++)
	{
		if($a[$j] <= $x)
		{
			$i++;
			$a = change($a, $i, $j);
		}
	}	
	$i++;
	$a = change($a, $i, $q);
	
	return $i;
}

function change($a, $x, $y)
{
	if($x == $y)
	{
		return $a;
	}
	$t = $a[$x];
	$a[$x] = $a[$y];
	$a[$y] = $t;

	return $a;
}

?>
