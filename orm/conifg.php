<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../config.php';

ActiveRecord\Config::initialize(function($cfg)
{
   $cfg->set_model_directory('/path/to/your/model_directory');
   $cfg->set_connections(
     array(
       'development' => 'mysql://username:password@localhost/development_database_name',
       'test' => 'mysql://username:password@localhost/test_database_name',
       'production' => 'mysql://username:password@localhost/production_database_name'
     )
   );
});