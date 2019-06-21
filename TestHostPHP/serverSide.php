<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//function testFunc(){
//echo "Just wanted to say hello ";
//    echo "<script type='text/javascript'>alert('message');</script>";

//$name = $_REQUEST["name"];
//$text = $_REQUEST["text"];

//$name="AswanthPP";
//echo $name." is registered";





//if(function_exists($_GET['f'])) { // get function name and parameter  $_GET['f']($_GET["p"]); 
//} else { 
//echo 'Method Not Exist'; 
//} 
//
//
//function insertData(){
    
$name = $_POST['name'];// create php function here   
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO `nametable`(`name`) VALUES ('$name')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


