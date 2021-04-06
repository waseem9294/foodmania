<?php
$servername="localhost";
$username="root";
$password_1="";
$dbname="signup";

$conn=mysqli_connect($servername,$username,$password_1,$dbname);


if(isset($conn))
{if(isset($_REQUEST['reg_user'])){
   $username=$_REQUEST['username'];
   
   $email=$_REQUEST['email'];
   $password_1=$_REQUEST['password_1'];
    
     $password_2=$_REQUEST['password_2'];

   $event=$_REQUEST['event'];
    $query="INSERT into registration(username,email,password_1,password_2,event) values('$username',' $email','$password_1','$password_2','$event')";
    $abc=mysqli_query($conn,$query);
    
   
    
    if($abc)
    {
       header("location:signin.html.html");
        
        }
    else
        header("location:signup.html.html");
}}

?>