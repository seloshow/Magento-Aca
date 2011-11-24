<?php
Class Academy_Modulo1_Model_Blog_Post extends Mage_Core_Model_Abstract
{
	protected function _contruct(){
		$this->_init('acy_modulo1/blog_post');
		//no tiene el postId dado que no le interesa el modelo de recursos.
	}
}