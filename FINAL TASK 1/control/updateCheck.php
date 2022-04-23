<?php

include ("../model/model.php");

$fname="";
$lname="";
$age="";
$salary="";
$address="";

if(isset($_POST["search"]))
{
    $search = $_POST["searchData"];
    $mydb = new db();
    $conObj = $mydb->opencon();
    $mydata = $mydb->searchData("person", $conObj, $search);
    if($mydata->num_rows > 0)
    {
        while($row=$mydata->fetch_assoc())
        {
            $fname=$row["fname"];
            $lname=$row["lname"];
            $age=$row["age"];
            $salary=$row["salary"];
            $address=$row["address"];
        }
    }
    else
    {
        echo "No data found";
    }
}

if(isset($_POST["update"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $address = $_POST["address"];

    $mydb = new db();
    $conObj = $mydb->opencon();
    $mydata = $mydb->updateData($fname, $lname, $age, $salary, $address, "person", $conObj);
    if($mydata==TRUE)
        {
            echo "Data update successful";
        }
        else
        {
            echo "Data update failed";
        }
    $mydb->closeCon($conObj);

}
?>