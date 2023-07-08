<?php
function getData(){
echo "GET Request on Student API";
}
function postData(){
if(count($_POST) >=3){
extract($_POST);

require_once("../db_connect.php");

$name=$Name;
$email=$Email;
$address=$Address;
$mssg=$Message;
// now getting all form data securely in variables
$Name=mysqli_real_escape_string($con,$name);
$Email=mysqli_real_escape_string($con,$email);
$Address=mysqli_real_escape_string($con,$address);
$Message=mysqli_real_escape_string($con,$mssg);
$run=mysqli_query($con,"insert into users values('$Name','$Email','$Address','$Message','rand(1,10)')");
$arr=["Name"=>$Name,"Email"=>$Email,"Address"=>$Address,"Message"=>$Message];
$dataToPost=["data"=>$arr,"Content-type"=>"Application/json","Status"=>200];
echo json_encode($dataToPost);  //converting data into json
}
else{
http_response_code(403);
echo "data Missing!";
}
}
function putData(){
echo "PUT Request on Student API";
}
function deleteData(){
echo "DELETE Request on Student API";
}
function other(){
echo json_encode("Request Not Supported!");
}
?>