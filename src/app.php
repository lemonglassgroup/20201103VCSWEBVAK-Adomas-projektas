<?php
if(isset($_POST['submit'])) {
    include('db.php');

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($fname) && !empty($lname) && !empty($email) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "forinformalmail@protonmail.com";
            $subject = "Nauja teatrozodynas.lt žinutė";
            $author = 'Nuo ' . $fname . ' ' . $lname . ', ' . $email;
            $messageContent = htmlspecialchars($message);

            mail($to, $subject, $author, $messageContent, $from);
            echo "<script>alert('Dekojame, Jūsų žinutė gauta');</script>";
        }
    }
}