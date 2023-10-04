<?php
require "db.php";
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$telephone =$_POST["telephone"];

$conn= connect();





$sql = "insert into students(name,age,address,telephone) values ('$name','$age','$address','$telephone')";
$conn->query($sql);



header("Location: students.php");

