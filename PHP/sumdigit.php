<?php 
// PHP program to calculate the sum of digits 
function sum($num) 
{ 
$sum=0; 
for($i=0; $i<strlen($num); $i++)
{ 
$sum+=$num[$i]; 
} 
return $sum; 
} 
$num="14597"; 
echo sum($num); 
?> 