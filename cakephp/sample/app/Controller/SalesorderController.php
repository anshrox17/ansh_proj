<?php

class SalesorderController extends AppController
{

	public $helpers = array('Html', 'Form' , 'Session');
	public $components = array('Session' , 'RequestHandler');
	
	public function  index(){
		
		
		$this->set('salesorders', $this->Salesorder->_index());
		
	}
	
	
	public function ajax(){
	
		$output = array("response"=>"success" , "message"=>"ajax call");
		
		
		$value = $this->request->data('amt');
		$date  = $this->request->data('date');
		
		$this->Salesorder->_ajax($value , $date);
		
		
		echo json_encode($output);
		die();
	}
}