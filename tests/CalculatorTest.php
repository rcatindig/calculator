<?php 

include './Calculator.class.php';

use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase {

  /** testing for addition */
  public function testAddition() {
    $calc = new Calculator(3, 3, "+");
    $this->assertEquals($calc->calculate(), 6);
  }

  /** testing for subtraction */
  public function testSubtraction() {
    $calc = new Calculator(10, 3, "-");
    $this->assertEquals($calc->calculate(), 7);
  }

  /** testing for multiplication */
  public function testMultiplication() {
    $calc = new Calculator(10, 3, "*");
    $this->assertEquals($calc->calculate(), 30);
  }

  /** testing for divistion */
  public function testDivision() {
    $calc = new Calculator(10, 2, "/");
    $this->assertEquals($calc->calculate(), 5);
  }

  /** testing for square root */
  public function testSquareRoot() {
    $calc = new Calculator(9, null, "sqrt");
    $this->assertEquals($calc->calculate(), 3);
  }

}

?>