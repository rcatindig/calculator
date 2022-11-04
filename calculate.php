<?php

    include 'Calculator.class.php';

    echo "|----Operator----| ". "\n";
    echo "| (+) Addition ". "\n";
    echo "| (-) Subtract ". "\n";
    echo "| (*) Multiplication ". "\n";
    echo "| (/) Division ". "\n";
    echo "| (sqrt) Square Root ". "\n";


    $operator = fwrite(STDOUT," choose operator(+ - * /): ");
    $operator = trim(fgets(STDIN));


    $num1 = fwrite(STDOUT," First Number: ");
    $num1 = trim(fgets(STDIN));


    $num2 = null;
    if(in_array($operator, array('+', '-', '*', '/' ))) {
        $num2 = fwrite(STDOUT," Second Number: ");
        $num2 = trim(fgets(STDIN));
    }

    
    

    $calculator = new Calculator($num1, $num2, $operator);
    echo "The result is -> " . $calculator->calculate();
 ?>