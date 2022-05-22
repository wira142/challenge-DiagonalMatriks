<?php

$matriks = [
	[1,2,3],
    [4,5,6],
    [2,8,9],

];

$dSatu = 0;
$dDua = 0;
$supp = 1;

for($i = 0;$i < count($matriks)*2; $i++){
	if($i < count($matriks)){
    	$dSatu += $matriks[$i][$i];
    }else{
    	$dDua += $matriks[$i - count($matriks)][count($matriks)-$supp];
        $supp++;
    }
}

echo "<br>".$dSatu."<br>";
echo $dDua;