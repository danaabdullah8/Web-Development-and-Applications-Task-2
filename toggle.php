<?php

include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT status FROM users WHERE id=$id");

$row = $result->fetch_assoc();

if($row['status']==0){

$newStatus=1;

}else{

$newStatus=0;

}

$conn->query("UPDATE users SET status=$newStatus WHERE id=$id");

header("Location: index.php");

?>