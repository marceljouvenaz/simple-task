<?php
//vraagt om getal en bewerking
//input
echo "geef een getal: ";
$input = trim(fgets(STDIN));
echo "type s for sum, or p for product: ";
$task = trim(fgets(STDIN));

//bepaal bewerking
if($task =='s'){
  $answer = 0;
  for ($i=0 ; $i <= $input ; $i++ ) { 
	$answer += $i;
}
}elseif($task == 'p'){
  $answer =1;
  for ($i=1 ; $i <= $input ; $i++ ) { 
	$answer *= $i;
}
}else{
  $answer = 'only p(roduct) and s(um) are defined acytions';
}

//view
echo $answer;
