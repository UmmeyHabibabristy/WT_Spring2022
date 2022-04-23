<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
    <br>
    <hr>
    <form  action="" method="post" onsubmit="return login()">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input class="loginUname" type="text" name="fname"></td>
                <p id="loginUnamep"></p>
            </tr>

            
            <tr>
                <td>E-mail:</td>
                <td><input class="loginEmail" type="email" name="email"></td>
                <p id="loginEmailp"></p>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input class="loginPass" type="password" name="pass"></td>
                <p id="loginPassp"></p>
            </tr>
            
            
        </table>
        <input type="submit" value="submit" name="submit"> 
    </form>



    
<script src="../js/regi.js" ></script>
</body>
</html>


<?php
include "../control/regiControl.php"
?>