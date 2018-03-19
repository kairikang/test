<?php
$a=[1,2,3,4,5,6,7,8,9];
$i = binarysearch($a, 6);
var_Dump($i);


function binarysearch($a ,$f)
{
	$p = 0;
	$q = count($a) - 1;
	while($p <= $q)
	{
		$i = ceil((($q-$p)/2)+$p);
		if($a[$i] > $f)
		{
			$q = $i - 1;
		}
		elseif($a[$i] < $f)
		{
			$p = $i + 1;
		}
		else
		{
			return $a[$i];
		}
	}
}



?>
