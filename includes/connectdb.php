<?php
//$hostname='localhost';
//$user='root';
//$password='';
//$dbname='db_cms';
//$con=mysqli_connect($hostname,$user,$password,$dbname);

define('HOSTNAME','localhost');
define('USER_NAME','root');
define('PASSWORD','');
define('DB_NAME','db_cms');
$con=mysqli_connect(HOSTNAME,USER_NAME,PASSWORD,DB_NAME);
if(!$con):die("connect failed".mysqli_connect_errno()."Error No: ".mysqli_connect_errno());
    else:echo 'Connected';
    endif;