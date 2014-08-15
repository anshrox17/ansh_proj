<?php

class Salesorder extends AppModel{

	public $helpers = array('Html', 'Form' , 'Session');
	public $components = array('Session');
	
	public function  _index(){
		
		$result =  $this->query("select s.* , p.p_name ,p.Value , c.customer_name from salesorders s LEFT JOIN products p ON p.p_id = s.p_id 
																									 LEFT JOIN customer c ON c.customer_id = s.customer_id");
		return $result;
	}
	
	
	public function _ajax($value = 0 , $date = 0){
	
	$this->query("UPDATE salesorders  SET  tax_percent = " . $value . " WHERE  date = '".$date."' ");
	
	}
	
}