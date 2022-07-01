<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/desarrolloweb/orm/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{

   $cfg->set_model_directory('../model');
   $cfg->set_connections(
     array(
       'development' => 'mysql://root:@localhost/musica',
       'test' => 'mysql://root:@localhost/musica',
       'production' => 'mysql://root:@localhost/musica'
     )
   );
});