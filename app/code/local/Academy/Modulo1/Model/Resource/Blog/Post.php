<?php
class Academy_Modulo1_Model_Resource_Blog_Post
extends Mage_Core_Model_Resource_Db_Abstract{
	protected function _construct(){//usamos un contructos con un solo guion dado que el de __contruct lo usa Magento para inicializar cosas.
		$this->_init('acy_modulo1/blog_post', 'post_id');
		
		//en el contructor es donde asocio el modelo de recursos a mi modelo para el acceso a la BBDD
		//al hacer un load o un save va a poder usar los métodos del modelo de recursos
	}
}
