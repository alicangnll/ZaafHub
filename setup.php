<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ali Can Gonullu | Vulnerable Web Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="bg-info text-center container">
  <div class="mt-4 bg-info text-center">
      <p style="font-size:200%">Ali Can Gonullu | Vulnerable Web Application</p>
    </div>
  <div align="center" style="padding:10px;">
    <a class="btn btn-primary" onclick="location.href='index.php'">Home Page</a>
  </div>
  </link>
  <div align="center" class="card" style="padding:5%;border-radius: 10px;">

    <form method="POST" class="mt-2">
      <label style="font-size:24px;font-family:'Georgia'">Create Database:&ensp;</label>
      <input type="submit" name="submit" value="Enter" style="padding:8px;" class="btn btn-primary"></form>

    <form method="POST" class="mt-2">
      <label style="font-size:24px;font-family:'Georgia'">Restore Database:</label>
      <input type="submit" name="submit1" value="Enter" style="padding:8px;" class="btn btn-primary"></form>
  </div>

<div align="center" style="padding:60px;">
<?php

if (isset($_POST["submit"])) {

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysqli_error( $conn));
   }
   else
   echo 'Connected successfully  </br>';
   create_database($conn);
   create_tables($conn, "1ccb8097d0e9ce9f154608be60224c7c");
   mysqli_close($conn);
}
if (isset($_POST["submit1"])) {
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if ($conn) {
   	echo "Connected successfully <br>";
   }
   else {
	die('Could not connect: ' . mysqli_error( $conn));
   }

   remove_database($conn);
   create_database($conn);
   create_tables($conn, "1ccb8097d0e9ce9f154608be60224c7c");
   mysqli_close($conn);
}



function create_database($conn){
   $sql = 'CREATE DATABASE 1ccb8097d0e9ce9f154608be60224c7c';
   $retval = mysqli_query( $conn, $sql);

   if(! $retval ) {
      die('Could not create database: ' . mysqli_error( $conn));
   }

   echo "DATABASE 1ccb8097d0e9ce9f154608be60224c7c created successfully </br>";
}

function create_tables($conn, $db_name){
   $sql = 'CREATE TABLE books( '.
      'number INT NOT NULL , '.
      'bookname VARCHAR(50) NOT NULL, '.
      'authorname VARCHAR(50) NOT NULL)';
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query( $conn , $sql);

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }
    #-------------------------------------------------
   echo "Table books created successfully </br>";

   $sql = 'CREATE TABLE flags( '.
      'flag VARCHAR(50) NOT NULL)';
   mysqli_select_db($conn, $db_name);
   $retval = mysqli_query(  $conn , $sql );

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table flags created successfully </br>";
   #---------------------------------------------------
   $sql = 'CREATE TABLE secret( '.
      'username VARCHAR(56) NOT NULL , '.
      'password VARCHAR(56) NOT NULL)';
   mysqli_select_db($conn,$db_name);
   $retval = mysqli_query(   $conn, $sql );

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table secret created successfully </br>";
   #---------------------------------------------------
   $sql = 'CREATE TABLE users( '.
      'firstname VARCHAR(50) NOT NULL , '.
      'lastname VARCHAR(50) NOT NULL, '.
      'username  VARCHAR(50) NOT NULL, '.
      'password   VARCHAR(50) NOT NULL )';
   mysqli_select_db($conn, $db_name);
   $retval = mysqli_query( $conn , $sql);

   if(! $retval ) {
      die('Could not create table: ' . mysqli_error( $conn));
   }

   echo "Table users created successfully </br>";
   #---------------------------------------------------

   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (1, "SILMARILLION", "J.R.R TOLKIEN")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (2, "DUNE", "FRANK HERBERT")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (3, "THE HUNGER GAMES", "SUZANNE COLLINS")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (4, "HARRY POTTER \AND THE ORDER OF THE PHONEIX", "J.K ROWLING")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (5, "TO KILL A MOCKINGBIRD", "HARPER LEE")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (6, "TWILIGHT", "STEPHEINE MEYER")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (7, "THE MICE MAN", "GEORGE COCKCROFT")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO books (number, bookname, authorname) VALUES (8, "FLAG", "ohmygodyoucanfindme")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   #--------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO flags (flag) VALUES ("flag:waitthatsnoteasy")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO flags (flag) VALUES ("SQL Injection is easy?")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   #----------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO secret (username, password) VALUES ("admin", "password")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }

   #--------------------------------------------------------------------------------------------------

   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("John","Doe", "Admin", "password")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Alice","Carrol", "Rabbit", "White")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Bruce","Batman", "Alfred", "Batmobile")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Dare","Devil", "HackMe", "IfY0UC4N")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   $sql = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("fl","ag", "cmonguys", "againyouare")';
   if (mysqli_query($conn, $sql)) {
   echo "New record created successfully </br>";
   }
   else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}

function remove_database($conn){
   $sql = 'DROP DATABASE 1ccb8097d0e9ce9f154608be60224c7c';
   $retval = mysqli_query($conn, $sql);
   if($retval){
   echo "<br>The database deleted successfully.<br>";
   }
   else{
   echo "Error: ".$sql."<br>". mysqli_error($conn);
   }
}

?>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
  function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}
deleteAllCookies();
</script>
</html>
