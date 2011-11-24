<?php
class Academy_Modulo1_Block_Blog_View extends Mage_Core_Block_Template{
	//pensemos mejor hacer esto en el controlador
	
	protected $_product;
	public function getProduct(){
		/*esto no tiene sentido ahora dado que no se obtendrá un producto desde el bloque
		 * lo vamos a usar únicamente para el ejemplo
		 * */
		if(!$this->_product){
		//$this->_product= new Mage_Catalog_Model_Product();//esta no es la forma correcta de instanciar Objetos en Magento. 
		$this->_product=Mage::getModel('catalog/product');//esta es la forma correcta de hacerlo
		$this->_product->load(166);
		
		}
		return $this->_product;
		/*Antes del / tenemos las clases de tipo Model y despues tenemos el modelo concreto que sera product
		 * 
		 *  <models>
            <catalog>
                <class>Mage_Catalog_Model</class>
                <resourceModel>catalog_resource</resourceModel>
            </catalog>*/
		//$product->load(166);
		//return $product;
	}
}