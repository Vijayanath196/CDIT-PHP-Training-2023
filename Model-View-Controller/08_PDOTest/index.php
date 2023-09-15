<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'cdit';

// Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO instance
 $pdo = new PDO($dsn, $user, $password);
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
 $productiId = 1;
 $sql = 'SELECT * FROM products WHERE product_id = :product_id';
 $stmt = $pdo->prepare($sql);
 $stmt->execute(['product_id' => $productiId]);
 $users = $stmt->fetchAll();

 foreach($users as $user){
  echo $user->product_name.'<br>';
 }

 $name = 'Suneesh Thampi';
 $email = 'suneesh@gmail.com';
 $password = 'guest';

 $sql = 'INSERT INTO cdit.users(name, email, password) VALUES(:name, :email, :password)';
 $stmt = $pdo->prepare($sql);
 $stmt->execute(['name'=> $name, 'email' => $email, 'password' => $password]);
 echo 'Added User';


?>