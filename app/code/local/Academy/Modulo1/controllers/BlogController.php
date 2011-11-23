<?php
class Academy_Modulo1_BlogController extends Mage_Core_Controller_Front_Action
{
	public function indexAction(){
		//echo 'hello index del blogController';
		$this->_redirect('*/*/foobar');// primer * es para el mismo frontname
								//segundo * mismo controlador
		//esta linea es equivalente a 
		//$this->_redirect('academy/blog/foobar');
		/*Los _redirect hacen redirecciones a nivel de controladores.
		 * */
	}
	public function checkoutAction()
	{
		$this->_forward('save');//no utiliza la misma notacion sino que  
		/*el _forward va a recuperar la salida html y no le va a decir al navegador que cambie de URL 
		 * esta lína lo en el navegador pondría http://local.magentoacademy.com/academy/blog/checkout
		 * */
		
		//$this->_redirect('checkout/cart');// puedo mandar a cualquier controlador con la funcion _redirect
		//redirect: hace una respuesta http
	}
	public function foobarAction(){
		echo "foobar";
	}
	public function viewAction()
	{
		$this->loadLayout();//carga el layout 
		//$handles=$this->getLayout()->getUpdate()->getHandles();
		//Zend_Debug::dump($handles);exit;
		//echo 'view';
		$this->loadLayout();//carga el layout 
		$this->renderLayout();// renderiza(imprime) el layout.
		// cargará el layout de la pila de handles
	}
	
	public function saveAction()
	{
		echo 'save';
	}
}