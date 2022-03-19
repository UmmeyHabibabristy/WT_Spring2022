<?php

//Setting default values of variables
$uname=$passwordtf=$fname=$emailtf=$designation=$age=$preflangcheck="";

// Check and post values to resuls.php on button press:
if(isset($_POST["Submit"])){

    // Getting values from POST method
    $uname = $_POST['uname'];
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $emailtf = $_POST['emailtf'];
    $passwordtf = $_POST['passwordtf'];

    // A horizontal line and header of result info
    echo "<br/><hr>
    <h2>Result onSubmit:</h2>
    ";
    
    //__________________________________________________________________ Result ____________________________________________________________________________
    
    // Show username
    if(strlen($uname)>=2 && strlen($uname)<=8){
        echo "<br/> Username: ".$uname;
    }
    else{
        echo "<br/> Username has to be in between <i>2 to 8</i> chars";
    }

    // Show Full name
    if(!empty($fname)){
        echo "<br/> Full name: ".$fname;
    }
    else{
        echo "<br/> Full name field cannot be empty";
    }
    
    // Show age
    if(!empty($age)){
        echo "<br/> Age: ".$age;
    }
    else{
        echo "<br/> Age: Field cannot be empty";
    }
    
    // Show email
    if(!empty($emailtf) && str_contains($emailtf,".") && str_contains($emailtf,"@")){
        echo "<br/> Email ID: ".$emailtf;
    }
    else{
        echo "<br/> Email: Invalid email address";
    }

    // Show password
    if(strlen($passwordtf)>=8){
        echo "<br/> Password: ".$passwordtf;
    }
    else{
        echo "<br/> Password: Insufficient character(need at least 8 or more characters)";
    }

    // Show job designation
    if(empty($_POST['designation'])){
        echo "<br/> Please select a designation!";
    }
    else{

        $designation = $_POST['designation'];
        echo "<br/> Selected designation is: ".$designation;
    }

    // Show preffered programming language
    if(empty($_POST['preflangcheck'])){
        echo "<br/> Please select preffered programming language(at least one).";
    }
    else{
        $preflangcheck = $_POST['preflangcheck'];
        echo "<br/> Selected preffered programming language/(s) are: ";
        foreach($_POST['preflangcheck'] as $check){
            echo $check." ";
        }
    }

    // File upload echo's
    $file_name='image.jpg';
    if((filesize('../Files/'.$file_name)/1000)<=2000 && pathinfo($_FILES["fileattach"]['name'], PATHINFO_EXTENSION) == 'jpg'){

        if(move_uploaded_file($_FILES["fileattach"]['tmp_name'],"../Files/".$file_name) && !file_exists($_FILES["fileattach"]['tmp_name'])){
                echo "<br/> Upload status: "
                .$_FILES['fileattach']['name'];
                echo "<br/> File size :".(filesize('../Files/'.$file_name)/1000).' kb 
                <br/><img src="../Files/image.jpg" width=50 height=50/>
                ';
                echo "<br/>".pathinfo($_FILES["fileattach"]['name'], PATHINFO_EXTENSION);
            }
            else{
                echo "<br/>Upload failed";
            }
    }
    else{
        echo "<br/>File size error: Cannot be more than 1000 kb <i>(".(filesize('../Files/'.$file_name)/1000)." kb</i>) and image has to be in .jpg format";
    }
    
    
}

?>
