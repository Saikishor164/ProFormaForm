<?php


    // Get form data
    $schooljr = $_POST["schooljr"];
    $school = $_POST["school"];
    $Instructionname = $_POST["Instructionname"];
    $primaryname = $_POST["primaryname"];
    $adid = $_POST["adid"];
    $strength = $_POST["strength"];
    $teachingstaff = $_POST["teachingstaff"];
    $secondaryschool = $_POST["secondaryschool"];
    $adid2 = $_POST["adid2"];
    $secstrength = $_POST["secstrength"];
    $secteachingstaffsec = $_POST["secteachingstaffsec"];
    $jrschool = $_POST["jrschool"];
    $adid3 = $_POST["adid3"];
    $jrstrength = $_POST["jrstrength"];
    $jrteachingstaff = $_POST["jrteachingstaff"];
    $date = $_POST["date"];

   // echo "$schooljr.' - '.$school' - '.$Instructionname' - '.$primaryname' - '.$adid' - '.$strength' - '.$teachingstaff' - '.$secondaryschool' - '.$adid2' - '.$secstrength' - '.$secteachingstaffsec' - '.$jrschool' - '.$adid3' - '.$jrstrength' - '.$jrteachingstaff' - '.$date" ;

    

    // // Validate form data
    // $errors = array();
    // if(empty($name)) {
    //     //$errors["name"] = "Please enter your name";
    // }
    // if(empty($email)) {
    //     //$errors["email"] = "Please enter your email address";
    // } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     //$errors["email"] = "Invalid email address";
    // }
    // if(empty($password)) {
    //     //$errors["password"] = "Please enter a password";
    // } elseif(strlen($password) < 8) {
    //     //$errors["password"] = "Password must be at least 8 characters long";
    // }
    // if(empty($confirm_password)) {
    //     //$errors["confirm_password"] = "Please confirm your password";
    // } elseif($password != $confirm_password) {
    //     //$errors["confirm_password"] = "Passwords do not match";
    // }

    // If there are no errors, insert user data into database
    if(empty($errors)) {
        // Connect to database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "proforma";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert data into database
        $sql = "INSERT INTO pofoma2 (`schooljr`, `school`, `Instructionname`, `primaryname`, `adid`, `strength`, `teachingstaff`, `secondaryschool`, `adid2`, `secstrength`, `secteachingstaffsec`, `jrschool`, `adid3`, `jrstrength`, `jrteachingstaff`, `date`)
                VALUES ('$schooljr',' $school', '$Instructionname', '$primaryname',' $adid',' $strength',
                '$teachingstaff',' $secondaryschool',' $adid2',' $secstrength',' $secteachingstaffsec',
                '$jrschool',' $adid3',' $jrstrength',' $jrteachingstaff',' $date')";

        if ($conn->query($sql) === TRUE) {
            header("Location: form3.html");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        // If there are errors, display them to the user
        foreach($errors as $error) {
            echo "<p>$error</p>";
        }
    }


?>
