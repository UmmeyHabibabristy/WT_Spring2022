<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Registration(Task 02): Sending data to other page using post method</title>
</head>
<body>
<h1>Registration form</h1>
<hr>
    <form action="" method="post">
    <table>

<tr>
    <td><label for="uname">Username:</label></td>
    <td><input type="text" id="uname" name="uname" ></td>
</tr>

<tr>
    <td><label for="fname">Full name:</label></td>
    <td><input type="text" id="fname" name="fname" ></td>
</tr>
<tr>
    <td><label for="fage">Age:</label></td>
    <td><input type="number" min="0" id="fage" name="age" ></td>
</tr>
<tr>
    <td><label for="desigID">Designation:</label></td>
    <td id="desigID">
        <input type="radio" id="radjuniorprg" name="designation" value="Junior Programmer">
        <label for="radjuniorprg">Junior Programmer</label>
        <input type="radio" id="radseniorprg" name="designation" value="Senior Programmer">
        <label for="radseniorprg">Senior Programmer</label>
        <input type="radio" id="radprojlead" name="designation" value="Project Lead">
        <label for="radprojlead">Project Lead</label>
    </td>
</tr>
<tr>
    <td><label for="preflang">Preffered Language:</label></td>
    <td id="preflang">
        <input type="checkbox" id="checkjava" name="preflangcheck[]" value="JAVA">
        <label for="checkjava">JAVA</label>
        <input type="checkbox" id="checkphp" name="preflangcheck[]" value="PHP">
        <label for="checkphp">PHP</label>
        <input type="checkbox" id="checkcpp" name="preflangcheck[]" value="C++">
        <label for="checkcpp">C++</label>
    </td>
</tr>

<tr>
    <td><label for="idemail">Email:</label></td>
    <td><input type="email" id="idemail" name="emailtf"></td>
</tr>

<tr>
    <td><label for="idpassword">Password:</label></td>
    <td><input type="password" id="idpassword" name="passwordtf"></td>
</tr>

<tr>
    <td><label for="idfileattach">Please choose a file:</label></td>
    <td><input type="file" id="idfileattach" name="fileattach"></td>
</tr>
</table>

        <input type="submit" name="Submit"/>
        <input type="reset" name ="Reset"/> <br/>
    </form>
</body>
</html>
<?php 
    include "../Control/results.php"
?>
