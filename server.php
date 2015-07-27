<?php
include 'app/framework/Autoloader.php';
headers();

require 'vendor/autoload.php';


Toro::serve(array(
   
    "profile" => "UserController"
));
$config = array(
            'driver'    => 'mysql', // Db driver
            'host'      => ‘host’,
            'database'  => ‘database’,
            'username'  => ‘user’,
            'password'  => ‘password’,
            'charset'   => 'utf8', // Optional
            'collation' => 'utf8_unicode_ci', // Optional
            'options'   => array( // PDO constructor options, optional
                PDO::ATTR_TIMEOUT => 5,
                PDO::ATTR_EMULATE_PREPARES => false,
            ),
        );





