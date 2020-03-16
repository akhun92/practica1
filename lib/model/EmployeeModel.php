<?php

class EmployeeModel{
	private $_name;
	private $_date;
	private $_position;
	private $_photo;
	private $_salary;
	private $_cv;

	public function __construct($name, $date, $position = null, $photo = null, $salary = null, $cv = null){
		$this->_name = $name;
		$this->_date = $date;
		$this->_position = $position;
		$this->_photo = $photo;
		$this->_salary = $salary;
		$this->_cv = $cv;
 	}

	public function getName() {
		return $this->_name;
	}

	public function getDate() {
		setlocale(LC_ALL, "es_ES");
		$stringDate = date($this->_date);
		$date = DateTime::createFromFormat("Y-m-d", $stringDate);
		return strftime("%A %d de %B %Y", $date->getTimestamp());
	}

	public function getPosition() {
		return $this->_position;
	}

	public function getPhoto() {
		return $this->_photo;
	}

	public function getSalary() {
		return $this->_salary;
	}

	public function getCv() {
		return $this->_cv;
	}
}

