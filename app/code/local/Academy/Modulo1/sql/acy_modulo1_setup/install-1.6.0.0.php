<?php

//print("salta el instalador");exit;
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();
/**
 * Create table 'poll'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('acy_modulo1/blog_post'))
    ->addColumn('post_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Post Id')
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        ), 'Post title')
    ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, 1024, array(
        ), 'Post content')
    ->setComment('Blog_post');//Comentario de la tabla.
$installer->getConnection()->createTable($table);

$installer->endSetup();
