<?php

$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

$db = new PDO('mysql:host=localhost;dbname=huge;port=port;charset=utf8', 'root', 'root', $options);

/** PDO INSERT 1 rij */
$firstname = strip_tags($_POST['firstname']);
$lastname = strip_tags($_POST['lastname']);
$gender = strip_tags($_POST['gender']);


$sql = "INSERT INTO users(firstname, lastname, gender) 
	    VALUES (':firstname', ':lastname', ':gender')";
$query = $database->prepare($sql);

$query->execute(array(':firstname' => $firstname,
					  ':lastname' => $lastname,
					  ':gender' => $gender));

$count =  $query->rowCount();

if ($count == 1) {
	//Gelukt
} else {
	//Faal
}

/** PDO SELECT meerdere rijen */
$sql = "SELECT * FROM users";
$query = $database->prepare($sql);
$query->execute();

$users = $query->fetchAll();

foreach ($users as $user) {
	$user->firstname;
}

/** PDO SELECT een rij */
$sql = "SELECT * FROM users WHERE id=1";
$query = $database->prepare($sql);
$query->execute();

$user = $query->fetch();


