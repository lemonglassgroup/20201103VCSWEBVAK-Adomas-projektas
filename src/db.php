<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "project-db");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_error) {
    echo "Duomenų bazės klaida.";
    echo 'Klaida: ' . $mysqli->connect_error . '\n';
    exit();
}

mysqli_query($mysqli, "INSERT INTO from_contact_form (fname, lname, email, message)
    VALUES('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[message]')");