
<?php

session_start();
$host="localhost";
$username="root";
$password="";
$name="signup";

$conn=mysqli_connect($host,$username,$password,$name);


 if($conn){
      
     
if(isset($_REQUEST['reg_user'])){
  
    
    
   
    $password=$_REQUEST['password'];
    
        $username=$_REQUEST['username'];
    
        
        $query="select * from registration where username  ='$username' and password_1='$password'";
        
        $result=mysqli_query($conn,$query);
    $fetch=mysqli_fetch_assoc($result);
    
    $row=mysqli_num_rows($result);
        if($row == 1){
             
            
             $_SESSION['id']=$fetch['d_id'];
            
            header("location:dashbord/index-2.html");
        }
        else{
           
               header('location:signin.html.html');
        }
    }
 }

?>





