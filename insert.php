<?php

    require_once("database.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];
            $Password = $_POST['password'];

            $query = " insert into reguser (User_Name, User_Email,User_Age, Password) values('$UserName','$UserEmail','$UserAge','$Password')";
            $result = mysqli_query($conn,$query);

            if($result)
            {
                header("location:index.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }
    
    
    ?>