<?php






if(isset($_POST["submit"]))
{
    $firstName = $_POST["fname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];


    if(empty($firstName))
    {
        echo "please enter a valid First Name <br>";
    }
    else
    {
        echo "first Name = ".$firstName."<br>";
    }


 



  



    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        echo "please enter a valid email <br>";
    }
    else
    {
        echo "email = ".$email."<br>";
    }

    

    if(empty($pass) || strlen($pass)<8 )
    {
        echo "please enter a valid pass <br>";
    }
    else
    {
        echo "password = ".$pass."<br>";
    }







  

   
   
}









?>