<?php 

class Calculator{

    function calc($operand="not given", $num1="not given", $num2="not given"){ // All parameters are "optional" to prevent error messages
        if (!$operand!="not given" && !$num1!="not given" && $num2!="not given") { // if any of the parameters aren't given, complains
    if ($operand == "+") {
        return "The sum of the numbers is " . ($num1 + $num2) . "<br>";}
     else if ($operand == "-") {
        return "The difference of the numbers is " . ($num1 - $num2) . "<br>";}
         else if ($operand == "*") {
        return "The product of the numbers is " . ($num1 * $num2) . "<br>";}
         else if ($operand == "/") {
        if ($num2 == "0") {
            return "Cannot divide by zero" . "<br>";}
            else {return "The division of the numbers is " . ($num1/$num2) . "<br>";}

    }} else {return "You must enter a string and two numbers <br>";}
}

}

?>