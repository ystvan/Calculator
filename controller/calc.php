<?php
/**
 * Created by PhpStorm.
 * User: IstvanMarki
 * Date: 07-Nov-16
 * Time: 4:37 PM
 */

/**
$num1 = $_POST["FirstNum"];
$num2 = $_POST["SecondNum"];
$operand = $_POST["Operand"];

*/
$firstNumber = $_POST["FirstNum"];
$secondNumber = $_POST["SecondNum"];
$operationToBePerformed = $_POST["Operand"];




/**
switch ($operand) {
    case "+": $result = $num1 + $num2; break;
    case "-": $result = $num1 - $num2; break;
    case "*": $result = $num1 * $num2; break;
    case "/": $result = $num1 / $num2; break;
    default: echo "Check your math again, please"; header("refresh: 5; url= ../index.php"); exit;
}
 */

switch ($operationToBePerformed) {
    case "+": doAddition($firstNumber, $secondNumber); break;
    case "-": doSubtraction($firstNumber, $secondNumber); break;
    case "*": doMultiplication($firstNumber, $secondNumber); break;
    case "/": doDivision($firstNumber, $secondNumber); break;
    default: echo "Check your math again, please"; header("refresh: 5; url= ../index.php"); exit;
}


function doAddition($firstNumber, $secondNumber){

    $result = $firstNumber + $secondNumber;
    echo "The this two number is $result";

}

function doSubtraction($firstNumber, $secondNumber){

    $result = $firstNumber - $secondNumber;
    echo  "Subtracting operation's result is $result";
}

function doMultiplication($firstNumber, $secondNumber){

    $result = $firstNumber * $secondNumber;
    echo  "Multiplicative operation's result is $result";
}

function doDivision($firstNumber, $secondNumber){

    $result = $firstNumber / $secondNumber;
    echo  "Divisional operation's result is $result";
}



header("refresh: 5; url=../index.php");
exit;