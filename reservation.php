

<?php


$servername="localhost";
$username="root";
$password="";
$dbname="table";

$conn=mysqli_connect($servername,$username,$password,$dbname);


if(isset($conn))
{
   $name=$_REQUEST['name'];
   $email=$_REQUEST['email'];
   $occassion=$_REQUEST['occassion'];
   $date=$_REQUEST['date'];
   $message=$_REQUEST['message'];
    
   
   
    $query="INSERT into reservation(name,email,occassion,date,message) values('$name', '$email','$occassion','$date','$message')";
    $abc=mysqli_query($conn,$query);
    
   
    
    if($abc)
    {  
        echo"<script> alert('table reserved'); window.location.href='index.html'; </script>";

   
        }
    else
        header("location:reservation.php");
}

?>