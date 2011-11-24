<?php
class Academy_Modulo1_Model_Observer 
{
	public function miMetodo($observer)
	{
		//print_r("ha saltado");exit;
		$event= $observer->getEvent();
		$username=$event->getUserName();//user name.
		//print_r("patata");exit;
		Mage::log("patata");
	}
	public function beforeSaveProduct($observer){
		$event= $observer->getEvent();
		Mage::log("Antes de guardar el producto");
	}
}