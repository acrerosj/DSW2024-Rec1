<?php

use Dsw\Rec1\Employee;

require '../vendor/autoload.php';
require 'employees_list.php';

// 1. Establece la bonificación para todos los empleados en un 10% utilizando el método
// estático.
Employee::setBonus(10);

// 2. Crea las instancias de empleados a partir del listado definido en el array
// multidimensional $employeesList y almacénalas en un array de empleados.
$employees = [];
foreach ($employeesList as $employeeData) {
  $employees[] = new Employee($employeeData['firstName'], $employeeData['lastName'], $employeeData['salary']);
}
// 3. Incrementa el salario de todos los empleados en 100€ utilizando el método
// setSalary.
// Error en el enunciado. No se puede incrementar el salario porque es privado. Y no se puede leer la propiedad salary. 
// foreach($employees as $employee) {
//   $employee.setSalary($employee->salary + 100);
// }
// Habria que añadir un método público incrementSalary(100) que suma el valor al salario del empleado.
foreach($employees as $employee) {
   $employee->incrementSalary(100);
}

// 4. Muestra en pantalla la información de todos los empleados utilizando el método
// __toString.
// 
foreach($employees as $employee) {
  echo '<p>' . $employee . '</p>';
}

?>