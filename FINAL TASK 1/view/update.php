<?php

include ("../control/updateCheck.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data</title>
</head>
<body>

<form action="" method="post">
    Update: <input type="text" name="searchData"> <br>
    <input type="submit" name="search" value="Search">
</form>

<br>
<br>

<form action="" method="post">
    <input type="text" name="fname" value="<?php echo $fname; ?>">
    <input type="text" name="lname" value="<?php echo $lname; ?>">
    <input type="text" name="age" value="<?php echo $age; ?>">
    <input type="text" name="salary" value="<?php echo $salary; ?>">
    <input type="text" name="address" value="<?php echo $address; ?>"> <br>
    <input type="submit" name="update" value="Update">

</form>

</body>
</html>