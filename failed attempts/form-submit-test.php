<?php

$servername = "localhost:3307";
$username = "username";
$password = "";
$dbname = "nm-db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to create table
    $sqlarticles = "CREATE TABLE articles (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title CHAR(255),
    image CHAR(255),
    author CHAR(255),
    authorImg CHAR(255),
    date DATETIME

    )";

    $sqlform = "CREATE TABLE form (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name CHAR(255),
    email CHAR(255),
    telephone INT(11),
    subject CHAR(255),
    message LONGTEXT

    )";

  // use exec() because no results are returned
  $conn->exec($sqlarticles);
  echo "Table articles created successfully";

  $conn->exec($sqlform);
  echo "Table form created successfully";
} catch(PDOException $e) {
  echo $sqlarticles . "<br>" . $e->getMessage();
  echo $sqlform . "<br>" . $e->getMessage();
}

$conn = null;




    // Name validation
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
  
  // Empty variables to be filled in processing

  $name = "";
  $email = "";
  $subject = "";
  $telephone = "";
  $message = "";    

  if($_SERVER["REQUEST_METHOD"] == "POST"){

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
  }


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("INSERT INTO $sqlform (name, email, telephone, subject, message)
  VALUES (:name, :email , :telephone , :subject, :message )");

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $telephone = $_REQUEST['telephone'];
  $subject = $_RESQUEST['subject'];
  $message = $_REQUEST['message'];

  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':telephone', $telephone);
  $stmt->bindParam(':subject', $subject);
  $stmt->bindParam(':message', $message);

  $stmt->execute();

  // use exec() because no results are returned
  
  echo "New record created successfully";

} catch(PDOException $e) {
  echo $sqlarticles . "<br>" . $e->getMessage();
}

$conn = null;
?>