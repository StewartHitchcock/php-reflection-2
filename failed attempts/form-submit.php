<?php 


if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];   
}
function filterName($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}

// Email Validation
function filterEmail($field){
    $field = filter_var(trim(field, FILTER_SANITIZE_EMAIL));
        if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}

function filterString($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}


include ('connection.php');
if ($pdo == NULL){}
else{
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(empty($_POST["name"])){
            // Code to make input border go red
        } else{
            $name = filterName($_POST["name"]);
            if($name == FALSE){
                // Code to make input border go red.
            }
        }
  
        if(empty($_POST["email"])){
            // Code to make input border go red
        } else{
            $email = filterEmail($_POST["email"]);
            if($email == FALSE){
                // Code to make input border go red.
            }
        }
  
        if(empty($_POST["telephone"])){
            // Code to make input border go red
        } else{
            $telephone = filterString($_POST["telephone"]);
            if($telephone == FALSE){
                // Code to make input border go red.
            }
        }
  
        if(empty($_POST["subject"])){
            // Code to make input border go red
        } else{
            $subject = filterString($_POST["subject"]);
            if($subject == FALSE){
                // Code to make input border go red.
            }
        }
  
        if(empty($_POST["message"])){
            // Code to make input border go red
        } else{
            $message = filterString($_POST["message"]);
            if($message == FALSE){
                // Code to make input border go red.
            }
        }

        $statement = $pdo->prepare("INSERT INTO form (name, email, telephone, subject, message) VALUES (?, ?, ?, ?, ?)");
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $email);
        $statement->bindParam(3, $telephone);
        $statement->bindParam(4, $subject);
        $statement->bindParam(5, $message);
        $statement->execute();
        header("Location: contact-page.php");
        exit();
    }
}

?>