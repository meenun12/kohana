<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
    'default' => array
    (
        'type'       => 'MySQLi',
        'connection' => array(
            /**
             * The following options are available for MySQL:
             *
             * string   hostname
             * string   username
             * string   password
             * boolean  persistent
             * string   database
             *
             * Ports and sockets may be appended to the hostname.
             */
            'hostname'   => 'localhost',
            'username'   => 'root',
            'password'   => 'root',
            'persistent' => FALSE,
            'database'   => 'kohana',
            'socket'     => NULL,
            'port'       => 3306,
        ),
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
        'profiling'    => TRUE,
    ),
//    'alternative' => array(
//        'type'       => 'PDO_MySQL',
//        'connection' => array(
//            /**
//             * The following options are available for PDO:
//             *
//             * string   dsn
//             * string   username
//             * string   password
//             * boolean  persistent
//             * string   identifier
//             */
//            'dsn'        => 'mysql:host=localhost;dbname=dealroom',
//            'username'   => 'root',
//            'password'   => '123',
//            'persistent' => FALSE,
//        ),
//        'table_prefix' => '',
//        'charset'      => 'utf8',
//        'caching'      => FALSE,
//        'profiling'    => TRUE,
//        'options'      => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'),
//    ),
);