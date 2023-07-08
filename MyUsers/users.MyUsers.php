<?php
// echo "student data";
require_once("../Controller/users.Controller.php");
if(isset($_SERVER['REQUEST_METHOD'])){ //checking request method
$_SERVER['REQUEST_METHOD']=='GET' && getData();
$_SERVER['REQUEST_METHOD']=='POST' && postData();
$_SERVER['REQUEST_METHOD']=='PUT' && putData();
$_SERVER['REQUEST_METHOD']=='DELETE' && deleteData();
$_SERVER['REQUEST_METHOD']!='GET' && $_SERVER['REQUEST_METHOD']!='POST' && $_SERVER['REQUEST_METHOD']!='PUT' && $_SERVER['REQUEST_METHOD']!='DELETE' && other();
}
?>