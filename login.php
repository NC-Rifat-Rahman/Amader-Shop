<?php 


$host="localhost";
$user="root";
$password="";
$db="amader_shop";

$con = mysqli_connect($host, $user, $password, "amader_shop");



if(isset($_POST['user'])){
    
    $uname=$_POST['user'];
    $pass=$_POST['password'];
    
    $sql="select * from reguser where User_Name='".$uname."'AND Password='".$pass."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>