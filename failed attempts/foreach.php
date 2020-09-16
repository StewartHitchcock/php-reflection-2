
<?php

$conn = new PDO();
// Connection to the dataBase

// varaibles for the database connection
$dsn = "mysql:host=localhost;dbname=database";
$user = "root";
$passwd = "";

// creating a new PHP DataBase Object
try{
  $pdo = new PDO($dsn, $user, $passwd);
} catch (PDOException $e){
  echo "Connection Failed: " . $e->getMessage();
}
// Query the DB for the inforamation on the news cards
$stm = $pdo->query("SELECT * FROM newsArticles ORDER BY datePosted LIMIT 3");

// Fetch the data for the newscards to be used in the loop
$cards = $stm->fetchAll();


?>



