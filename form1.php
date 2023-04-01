<?php
if (isset($_POST['submit']))
{
$form1ID = $_POST['form1ID'];
$educationalname = $_POST['educationalname'];
$educationaladdress = $_POST['educationaladdress'];
$location = $_POST['location'];
$educationalcontact = $_POST['educationalcontact'];
$educationalmobile = $_POST['educationalmobile'];
$educationalemail = $_POST['educationalemail'];
$presidentname = $_POST['presidentname'];
$presidentcontact = $_POST['presidentcontact'];
$Presidentmobile = $_POST['Presidentmobile'];
$presidentemail = $_POST['presidentemail'];
$secretaryname = $_POST['secretaryname'];
$secretarycontact = $_POST['secretarycontact'];
$secretarymobile = $_POST['secretarymobile'];
$secretaryemail = $_POST['secretaryemail'];
$coordinatorname = $_POST['coordinatorname'];
$coordinatorcontact = $_POST['coordinatorcontact'];
$coordinatormobile = $_POST['coordinatormobile'];
$coordinatoremail = $_POST['coordinatoremail'];
$date = $_POST['date'];
}

    //database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proforma";
    // creating a connection

    $con = mysqli_connect($host, $username, $password, $dbname);
// to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }


    $sql = "INSERT INTO profoma1 (form1ID, educationalname, educationaladdress, location, educationalcontact, educationalmobile, educationalemail, presidentname,presidentcontact, Presidentmobile, presidentemail,secretaryname, secretarycontact, secretarymobile,secretaryemail, coordinatorname, coordinatorcontact, coordinatormobile, coordinatoremail, date)
    values('0', '$educationalname', '$educationaladdress','$location', '$educationalcontact' , '$educationalmobile', '$educationalemail','$presidentname', '$presidentcontact' ,'$Presidentmobile', '$presidentemail', '$secretaryname', '$secretarycontact', '$secretarymobile', '$secretaryemail', '$coordinatorname', '$coordinatorcontact','$coordinatormobile', '$coordinatoremail', '$date' )");

 // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
    echo("Successfully submitted Proforma");

        echo " ";
    }




//     if($conn -> connect_error){
//         die('Connection Failed : ' .$conn->connect_error);
//     }else{
//         $stmt = $conn->prepare("insert into regitration(form1ID,educationalname,educationaladdress,location,educationalcontact,educationalmobile,educationalemail,presidentname,presidentcontact,Presidentmobile,presidentemail,secretaryname,secretarycontact,secretarymobile,secretaryemail,coordinatorname,coordinatorcontact,coordinatormobile,coordinatoremail,date)
//
//          values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
//
//          $stmt_bind_param("issiiissiissiissiiss",$form1ID,$educationalname,$educationaladdress,$location,$educationalcontact,$educationalmobile,$educationalemail,$presidentname,$presidentcontact,$Presidentmobile,$presidentemail,$secretaryname,$secretarycontact,$secretarymobile,$secretaryemail,$coordinatorname,$coordinatorcontact,$coordinatormobile,$coordinatoremail,$date)
//
//         echo("registration successful...");

//         $stmt->close();
//         $conn_ .close();
//         $conn_ .close();
//     }
    


?>

