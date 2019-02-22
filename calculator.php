<?php
$num1;
$operator;
$num2;
$operator = readline("Enter Operator:[M=Multiplication, D=Division, S=Subtraction, A=Addition]\n ");
if($operator== "A"){ 
$num1 =  readline("Enter Addend:");
$num2 = readline("Enter Subtrahend :");
print "Sum: ";
 echo  $num1 + $num2;
}
else if($operator == "S") {
$num1 =  readline("Enter minuend:");
$num2 = readline("Enter Subtrahend :");
print "Difference: ";
 echo $num1 - $num2;
}
else if($operator == "M") {
$num1 =  readline("Enter Multiplicand:");
$num2 = readline("Enter Multiplier :");
print "Product ";
 echo $num1 * $num2;
} 
else if($operator == "D") {
$num1 =  readline("Enter Dividend:");
$num2 = readline("Enter Divisor:");
print "Equation: ";
 echo $num1 / $num2;
}

?>