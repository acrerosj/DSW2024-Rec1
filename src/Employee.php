<?php
namespace Dsw\Rec1;

class Employee {
  public $firstName;
  public $lastName;
  private $salary;

  static private $bonus = 0;

  public function __construct($firstName, $lastName, $salary) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->salary = $salary;
  }

  public function setSalary($salary) {
    if ($salary >0 ) {
      $this->salary = $salary;
    }
  }

  private function calculateBonus() {
    return $this->salary * (100 + self::$bonus) / 100;
  }

  static public function setBonus($bonus) {
    self::$bonus = $bonus;
  }

  public function __toString()
  {
    return $this->firstName . ' | ' . $this->lastName . ' | ' . $this->calculateBonus() . "€";
  }

  // Se añade este método para poder incrementar el salario
  public function incrementSalary($increment) {
    $this->salary += $increment;
  }
}
?>