<?php 

$name="";
$email="";
$number="";
$subject="";
$message="";
$nameErr = ""; 
$emailErr = "";
$numberErr = ""; 
$subjectErr = "";
$messageErr = "";


// Form Submission
    if (isset($_POST['name'], $_POST['email'], $_POST['tphoneNumber'], $_POST['subject'], $_POST['message'])) {
        
    function test_input($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }  
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["tphoneNumber"])) {
            $numberErr="Telephone number is required";
        } else {
            $number = test_input($_POST["tphoneNumber"]);
        }
        if (empty($_POST["subject"])) {
            $subjectErr="Subject is required";
        } else {
            $subject = test_input($_POST["subject"]);
        }
        if (empty($_POST["message"])) {
            $messageErr = "Message is required";
        } else {
            $message = test_input($_POST["message"]);
        }
    }

       
        
    } else {
        echo "no u";
    }

    // form validation




     // echo filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        // echo filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        // echo filter_input(INPUT_POST, 'tphoneNumber', FILTER_SANITIZE_NUMBER_INT);
        // echo filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
        // echo filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
?>