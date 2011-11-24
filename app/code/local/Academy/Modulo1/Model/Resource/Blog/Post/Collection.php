<?php
class Academy_Modulo1_Model_Resource_Blog_Post_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Initialize collection
     *
     */
	/*Tengo que inicializar el recurso collection*/
	
    public function _construct()
    {
    	//print("hola");exit;
        $this->_init('acy_modulo1/blog_post');
    }
    
}