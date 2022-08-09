<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/desarrolloweb/orm/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{

   $cfg->set_model_directory($_SERVER['DOCUMENT_ROOT']. '/desarrolloweb/model');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/desarrolloweb',
       'test' => 'mysql://root:@localhost/desarrolloweb',
       'production' => 'mysql://root:@localhost/desarrolloweb'
     )
   );
});