<?php
//require_once('app/code/core/Mage/Checkout/controllers/CartController.php');
class Academy_Modulo1_BlogController extends Academy_Modulo1_Controller_Action//Mage_Checkout_CartController
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
		$this->loadLayout();
		$blogPost=Mage::getModel('acy_modulo1/blog_post');
		// antes de "/" se va a buscar el namespace del config.xml
		// despues del / va a entrar en carpetas cada vez que encuentre "_"
		//$blogPost->setTitle('Mi primer blog post');//llamamos a los metodos mágicos de Magento, y seteamos el titulo.
		//$blogPost->setContent('lorem ipsum dolor.....');//llamamos al método mágico de Magento.
		$coll=$blogPost->getCollection();
		
		$miBloque=$this->getLayout()->getBlock('blog.view');
		$miBloque->setBlogPostCollection($coll);
		
		
		// ahora voy a pasar los datos a mi plantillas phtml
		
		
		//echo get_class($blogPost);exit;
		
		
		
		$this->renderLayout();
	}
	public function mezclandoCollectionAction(){
		$this->loadLayout();
		$poll=Mage::getModel('customer/customer')->getCollection();
		//print_r($poll);exit;
		$this->renderLayout();
	}
	public function loadAndDisplayProductAction(){
		$this->loadLayout();//carga el layout 
		//$handles=$this->getLayout()->getUpdate()->getHandles();
		//Zend_Debug::dump($handles);exit;
		//echo 'view';
		
		/*Para cargarlo mediante el controlador*/
		//si el bloque no va a ser usado en ningun lado mas , está bien hacerlo en el controlados
		//si necesito pintarlo en el lado derecho no lo voy a hacer en el controlador, lo haría en el bloque
		//$product=Mage::getModel('catalog/product');
		//$product->load(162);
		//$miBloque=$this->getLayout()->getBlock('blog.view');
		//$miBloque->setProduct($product);
		//echo get_class($miBloque);die;
		/*Para cargarlo mediante el controlador*/
		
		$this->renderLayout();// renderiza(imprime) el layout.
		// cargará el layout de la pila de handles
		
	}
	public function newAction(){
		$blogPost = Mage::getModel('acy_modulo1/blog_post');
		$blogPost->setTitle('Un nuevo blog post');
		$blogPost->setContent('Lorem ipsum dolor.....');
		$blogPost->save();
		$this->_redirect('*/*/view');
	}
	
	public function saveAction()
	{
		echo 'save';
	}
}