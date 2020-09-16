<?php
$servername = "localhost";
$username = "root";
$password = "password";
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
?>