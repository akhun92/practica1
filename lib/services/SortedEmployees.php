<?php 

class SortedEmployees {
    
    public function sortedEmployeesByName($employeesArrayCompare) {
        
		usort($employeesArrayCompare, function($a, $b){
			return strcmp($a->getName(), $b->getName());
		});
		return $employeesArrayCompare;
	}

	public function sortedEmployeesByDate($employeesArrayCompare) {
		usort($employeesArrayCompare, function($b, $a){
			return strcmp($a->getDate(), $b->getDate());
		});
		return $employeesArrayCompare;
	}

	public function sortedEmployeesByPosition($employeesArrayCompare) {
		usort($employeesArrayCompare, function($a, $b){
			return strcmp($a->getPosition(), $b->getPosition());
		});
		return $employeesArrayCompare;
	}

	public function sortedEmployeesByMultimedia($employeesArrayCompare) {
		usort($employeesArrayCompare, function($a, $b){
			return strcmp($a->getPhoto(), $b->getPhoto() && $a->getCv(), $b->getCv());
		});
		return $employeesArrayCompare;
	}
}