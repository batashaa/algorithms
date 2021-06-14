<?php

$array = [5,2,4,6,1,3];

echo "Input array is : \n";
print_r($array);

for($i=1; $i<count($array); $i++)
{
	$key = $array[$i];
	$j = $i - 1;
	while($j >= 0 && $array[$j] > $key){
		$array[$j+1] = $array[$j];
		$j=$j-1;
	}
	$array[$j+1]=$key;
}

echo "Sorted array is: \n";
print_r($array);
?>
