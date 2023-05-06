<?php

{% comment %} 
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['optradio'];
$comment = $_POST['comment']; 
{% endcomment %}

$servername = "database-1.cgfrgcv0p3uh.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "adminshreya";

{% comment %} creating connection {% endcomment %}
$conn = new mysqli($servername, $username, $password);

{% comment %} For checking if connection is successful or not {% endcomment %}
if( !$conn) {
    die("Connection failed: ". $conn->connect_error);
}
else{
    echo "Connected successfully";
}

{% comment %} // to create a database
$base = "CREATE DATABASE mybase2"
mysqli_query(pipp) {% endcomment %}

?>
