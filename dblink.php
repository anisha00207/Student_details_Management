<?php
$link = mysqli_connect('localhost', 'root', '', 'ms');

if (!$link ) {
    die("Connection failed: " . mysqli_connect_error());
}

?>