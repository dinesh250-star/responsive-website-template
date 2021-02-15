<?php 
include "index.html";
$connection=mysqli_connect('localhost','root','','loop test');
//password field is empty
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=mysqli_real_escape_string($connection,$username);
    $email=mysqli_real_escape_string($connection, $email);
    $password=mysqli_real_escape_string($connection,$password);
    $query="INSERT INTO users(username,email,password)";
    $query.="VALUES('$username','$email','$password')";
    $result1=mysqli_query($connection,$query);
    
}
if(isset($_POST['submitt'])){
$name=$_POST['uname'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $name=mysqli_real_escape_string($connection,$name);
    $email=mysqli_real_escape_string($connection, $email);
    $message=mysqli_real_escape_string($connection, $message);
    $query="INSERT INTO contacts(name,email,message)";
    $query.="VALUES('$name','$email','$message')";
    $result=mysqli_query($connection,$query);
    

}

?>