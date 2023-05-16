<?php
    session_start();
    define('host','localhost');
    define('user','smartclasses');
    define('password','smartclasses');
    define('db','smartclasses');
    $conn=connect_to_db();
    function base_url(){
        return "https://kronoidtechnologies.com/";
    }
    function connect_to_db(){
        if(!defined('host')){
            define('host','localhost');
            define('user','smartclasses');
            define('password','smartclasses');
            define('db','smartclasses');
        }
        return mysqli_connect(host,user,password,db);
    }
?>