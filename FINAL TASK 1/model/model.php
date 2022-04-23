<?php



class db 
{
    function openCon()
    {
        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbname = "testdb";

        $conn = new mysqli($serverName,$userName,$password,$dbname);

        if($conn->connect_error)
        {
            echo "Connection failed <br>";
        }
        return $conn;
    }



    function dataInsert($fname,$lname,$age,$salary,$address,$tableName,$conn)
    {
        $sql = "INSERT INTO $tableName (fname,lname,age,salary,address) VALUES ('$fname','$lname',$age,$salary,'$address') ";

        if($conn->query($sql))
        {
            echo "Data insert successful <br>";
        }
        else
        {
            echo "Data insert failed ".$conn->error;
        }
    }

    function fetchData($tableName, $conn)
    {
        $sqlstr = "SELECT * FROM $tableName";
        $results = $conn->query($sqlstr);
        return $results;
    }
    
    function searchData($tableName, $conn, $search)
    {
        $sqlstr = "SELECT * FROM $tableName WHERE fname='$search'";
        $results = $conn->query($sqlstr);
        return $results;
    }

    function updateData($fname, $lname, $age, $salary, $address, $tableName, $conn)
    {
        $sql = "UPDATE $tableName SET lname='$lname', age='$age', salary='$salary', address='$address' WHERE fname='$fname'";
        $result = $conn->query($sql);

        return $result;
    }

    function closeCon($conn)
    {
        $conn->close();
    }

}
?>