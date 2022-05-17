<?php 

    require_once("database.php");

    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];

        $query = " update reguser set User_Name = '".$UserName."', User_Email='".$UserEmail."',User_Age='".$UserAge."' where User_ID='".$UserID."'";
        $result = mysqli_query($conn,$query);

        if($result)
        {
            header("location:view.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view.php");
    }


?>