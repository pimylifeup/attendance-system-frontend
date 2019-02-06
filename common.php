<?php
//Include medoo which is being utilized for interacting with the database
require 'Medoo.php';

//Now use Medoo's namespace
use Medoo\Medoo;

//Finally make a connection to our database and store it in our $database variable.
//Modify these settings to match your own configuration.
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'attendancesystem',
    'server'        => 'localhost',
    'username'      => 'attendanceadmin',
    'password'      => 'pimylifeup'
]);