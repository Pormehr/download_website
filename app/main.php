<?php

include __DIR__ ."/functions.php";

@session_start();

// database check
$conn = connect_to_db('127.0.0.1',
    'download_website_user',
    'HsthWPO18UDnBrGM',
    'download_website_db');

$uri = $_SERVER['REQUEST_URI'];
$uri = explode('/', $uri);

switch ($uri[1]) {
    case '':
        include __DIR__ ."/../views/index.php";
        break;
    case 'panel':

        switch ($uri[2]) {

            case 'user.html':

                include_once('../views/panel/user.html');

                break;


            default:
                header("HTTP/1.0 404 Not Found");
                die("Page Not Found");
        }

        break;

    default:
        header("HTTP/1.0 404 Not Found");
        die("Page Not Found");


}

//when someone want to sign-up
if (isset($_POST['register'])) {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $pass = ($_POST['pass']);
    $pass = md5($pass);
    signup_user($conn, "INSERT INTO `users` (`name` , `email` ,`password`) VALUES ('$name','$email','$pass')");
    //new
    $newUser_information = select_from_db($conn, "SELECT * FROM `users` WHERE `name` = $name");
    $user_id = $newUser_information['id'];
}

//when someone want to login
if (isset($_POST['login'])) {
    $name = ($_POST['name']);
    $pass = ($_POST['pass']);
    $pass = md5($pass);
    login_user($conn, "SELECT * FROM `users` WHERE name='$name' AND password='$pass' ");
    //new
    $oldUser_information = select_from_db($conn, "SELECT * FROM `users` WHERE `name` = $name");
    $user_id = $oldUser_information['id'];
}

//when someone want to upload image
if (isset($_POST['upload_img'])) {

    upload_img($conn, $user_id);
}

//when someone want to upload video
if (isset($_POST['upload_video'])) {

    upload_video($conn, $user_id);

        }

//when someone want to upload music
if (isset($_POST['upload_music'])) {

    upload_music($conn, $user_id);

}

