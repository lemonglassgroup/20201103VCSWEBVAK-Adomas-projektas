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

$query = "SELECT * FROM glossaryItems";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["term"];
        $field2name = $row["def"];

        echo '<div class="term">' . $field1name . '</div>';
        echo '<div class="def">' . $field2name . '</div>';
    }
    $result->free();
}
