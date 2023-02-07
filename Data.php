<?php

$link=mysqli_connect("localhost","root","","hospital");

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$age=$_REQUEST['age'];
$phNo=$_REQUEST['phNo'];
$gender=$_REQUEST['gender'];
$address=$_REQUEST['address'];




$save="insert into patiens values('$firstname','$lastname','$age','$phNo','$gender','$address')";

if(mysqli_query($link,$save))
{
echo("Data Saved");
}
else
{
echo("Data Not Saved, Please Try again");
}

?>