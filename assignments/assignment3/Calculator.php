<?php 

class Calculator{

    function calc($operand, $num1, $num2){
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

    } else {die ("You must enter a string and two numbers <br>");}
}

}

?>