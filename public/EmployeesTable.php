<?php
require_once(__DIR__.'/../lib/controller/EmployeesController.php');

class EmployeesTable {

  public static function getEmployeesTable($sortedBy) { 

    $employeesController = new EmployeesController();
    $employeeslist = $employeesController->indexAction();
    $employeeslistSorted = $employeesController->sortedEmployees($employeeslist, $sortedBy);
    ?>
    <tr>
      <th>Nombre y Apellidos</th>
      <th>Fecha de nacimiento</th>
      <th>Posición actual</th>
      <th>Foto</th>
      <th>Sueldo</th>
      <th>CV</th>
      <th>Opciones</th>
    </tr>

    <?php foreach($employeeslistSorted as $employee){ ?>
      <tr>
        <td><?=$employee->getName();?></td>
        <td><?=$employee->getDateInFormat();?></td>
        <td><?=$employee->getPosition();?></td>
        <td><img src="<?=$employee->getPhoto();?>"></td>
        <td><?=$employee->getSalary();?></td>
        <td><video controls poster="../assets/photo/cv.jpg">
          <source src="<?=$employee->getCv();?>" type="video/mp4">
        </video></td>
        <td>
          <form action="EmployeeEdit.php">
          <input type="submit" value="Editar">
          <input type="text" value="<?=$employee->getId();?>" style="display: none" name="id">
          </form>
        </td>
      </tr><?php 
    }
  }   
}?>




