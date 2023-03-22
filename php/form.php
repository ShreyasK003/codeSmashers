<?php
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="codesmashers";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $query=$_POST['query'];

    $connection=new mysqli($server,$username,$password,$database);
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $query="INSERT INTO `contact` (`name`, `email`, `phone`, `queries`) VALUES ('$name', '$email', '$phone', '$query')";

    if ($connection->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $query . "<br>" . $connection->error;
      }

    $connection->close();
    header("Location: ../contact.html");
?>