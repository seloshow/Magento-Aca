<?php
class Academy_Modulo1_IndexController extends Mage_Core_Controller_Front_Action
{
	public function indexAction()
    {
		//echo "controlador lanzado de Index controller";
		$this->_redirect('*/blog');// la primera parte de la URL será igual a donde estoy
	}
}