<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid Towson University email is required");
}else {
    echo "Email: " . $_POST["email"] . "<br>";
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}else {
    echo "Password: " . $_POST["password"] . "<br>";
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

print_r($_POST);


