<?php 

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$telephone = filter_input(INPUT_POST, 'telephone');
$subject = filter_input(INPUT_POST, 'subject');
$message = filter_input(INPUT_POST, 'message');

if (!empty($name)){
    if (!empty($email)){
        if (!empty($telephone)){
            if (!empty($subject)){
                if (!empty($message)){

                        $host = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "database";

                        // Connection creation to database 

                        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

                        if(mysqli_connect_error()){
                            die('Connect Error('.mysqli_connect_errno().')'
                            . mysqli_connect_error());
                        } else{
                            $sql = "INSERT INTO form (name, email, telephone, subject, message)
                            values('$name', '$email', '$telephone', '$subject', '$message')";
                            if($conn->query($sql)){
                                header("Location: connect-success.php");
                            } else{
                            echo "Error: ". $sql . "<br>" . $conn->error;
                        }
                        $conn->close();
                    } 

                }
                else{
                    // $messageinput = document.queryselector('.messageinput');

                    // $messageinput.classList.add("error");

                }
            } else {

                // $subjectinput = document.queryselector('.subjectinput');

                // $subjectinput.classList.add("error");

            }
        } else {
            // $telephoneinput = document.queryselector('.telephoneinput');

            // $telephoneinput.classList.add("error");
        }
    }
    else {
        // $emailinput = document.queryselector('.emailinput');

        // $emailinput.classList.add("error");
    }
} else{

//     $nameinput = document.queryselector('.nameinput');

//     $nameinput.classList.add("error");
}
?>