<?php

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


    // database connection

    $conn = new mysqli('localhost','root','','proforma');
    if($conn -> connect_error){
        die('Connection Failrd : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into regitration(form1ID,educationalname,educationaladdress,location,educationalcontact,educationalmobile,educationalemail,presidentname,presidentcontac,Presidentmobile,presidentemail,secretaryname,coordinatorcontact,coordinatormobile,coordinatoremail,date)
         values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
         $stmt_bind_param("isssiissiissiiss",$form1ID,$educationalname,$educationaladdress,$location,$educationalcontact,$educationalmobile,$educationalemail,$presidentname,$presidentcontact,$Presidentmobile,$presidentemail,$secretaryname,$secretarycontact,$secretarymobile,$secretaryemail,$coordinatorname,$coordinatorcontact,$coordinatormobile,$coordinatoremail,$date)
        echo "registration successfull...";
        $stmt->close();
        $conn_ .close();
        $conn_ .close();
    }
    


?>



<!-- <?php

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

// database connection
$conn = new mysqli('localhost','root','','proforma');
if($conn -> connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration(form1ID, educationalname, educationaladdress,location, educationalcontact, educationalmobile, educationalemail, presidentname, presidentcontact, Presidentmobile, presidentemail, secretaryname, secretarycontact, secretarymobile, secretaryemail, coordinatorname, coordinatorcontact, coordinatormobile, coordinatoremail, date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssiissiissiiss", $form1ID, $educationalname, $educationaladdress, $location, $educationalcontact, $educationalmobile, $educationalemail, $presidentname, $presidentcontact, $Presidentmobile, $presidentemail, $secretaryname, $secretarycontact, $secretarymobile, $secretaryemail, $coordinatorname, $coordinatorcontact, $coordinatormobile, $coordinatoremail, $date);
    $stmt->execute();
    echo "Registration successful...";
    $stmt->close();
    $conn->close();
}
?> -->
