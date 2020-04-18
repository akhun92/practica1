<?php

require_once(__DIR__.'/../model/EmployeeModel.php');
require_once(__DIR__.'/services/SortedEmployees.php');

class EmployeesController{

	public function indexAction(){
		$employeesArray = array();
		$file = file_get_contents(__DIR__."/../../data/EmployeesData.json");
		$data = json_decode($file);

		foreach ($data->employees as $emp) {
			$employee = new EmployeeModel($emp->id ,$emp->name, $emp->date, $emp->position, $emp->photo, $emp->salary, $emp->cv);
			array_push($employeesArray, $employee);
		}

		return ($employeesArray);
	}

	public function sortedEmployees($employeesArrayCompare, $sortedBy) {

		$sorter = new SortedEmployees();
		switch ($sortedBy) {
			case "name":
				  	return $sorter->sortedEmployeesByName($employeesArrayCompare);
				  	break;
			case "data":
					return $sorter->sortedEmployeesByDate($employeesArrayCompare);
					break;
			case "position":
					return $sorter->sortedEmployeesByPosition($employeesArrayCompare);
					break;
			case "salary":
					return $sorter->sortedEmployeesBySalary($employeesArrayCompare);
					break;
			case "nonSorted":
					return $employeesArrayCompare;
					break; 
			default:
					return $sorter->sortedEmployeesByPosition($employeesArrayCompare); 
		 }

	}


}
