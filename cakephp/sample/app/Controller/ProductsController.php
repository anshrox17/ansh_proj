<?php

class ProductsController extends AppController
{

	public $helpers = array('Html', 'Form' , 'Session');
	public $components = array('Session');
	
	public function  index(){
		$this->set('products', $this->Product->find('all'));
		
	}
}