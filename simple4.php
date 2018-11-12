<?php
//vraagt om getal en telt er naar toe
//init 
$sum = 0;
//input
echo "geef een getal: ";
$input = trim(fgets(STDIN));
//calc
for ($i=0 ; $i <= $input ; $i++ ) { 
	$sum += $i;
}
//view
echo $sum;