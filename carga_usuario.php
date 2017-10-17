<?php

/*
$sql = "INSERT INTO 'users' (username, nombre, apellido, email, password)
VALUES ($value[username], $value[nombre], NULL, $value[email], $value[password])";
*/

$sql = "INSERT INTO users (id, usernames) VALUES (NULL, $usuarios['username'])";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

 ?>
