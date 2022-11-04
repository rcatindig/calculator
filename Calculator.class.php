<?php

class Calculator {

    public $num1;
    public $num2;
    public $operator;

    public function __construct($num1, $num2, $operator) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    public function calculate() {
      switch ($this->operator) {
        case '+':
            $result = $this->num1 + $this->num2;
            break;
        case '-':
            $result = $this->num1 - $this->num2;
            break;
        case '*':
            $result = $this->num1 * $this->num2;
            break;
        case '/':
            $result = $this->num1 / $this->num2;
            break;

        case 'sqrt':
            $result = sqrt($this->num1);
            break;

        default:
            $result = "Invalid Operator";
            break;
      }
      return $result;
    }

}
?>