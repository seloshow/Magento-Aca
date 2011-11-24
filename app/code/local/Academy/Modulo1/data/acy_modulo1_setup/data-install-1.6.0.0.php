<?php
//die('upgrade');
$installer = $this;
$blogPost = Mage::getModel('acy_modulo1/blog_post');
$blogPost->setTitle('Mi Post');
$blogPost->setContent('Titulo muy interesante');
$blogPost->save();

