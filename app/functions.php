<?php
global $error;
function connect_to_db($servername, $username, $password, $databasename)
{

    $conn = new mysqli($servername, $username, $password, $databasename);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}


function signup_user($conn,$sql)
{
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $pass = ($_POST['pass']);

    $sql_u = "SELECT * FROM `users` WHERE `name`='$name'";
    $sql_e = "SELECT * FROM `users` WHERE email='$email'";

    $res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $error[]="Sorry... username already taken";
    }else if(mysqli_num_rows($res_e) > 0){
        $error[]="Sorry... email already taken";
        return $error;
    }else{
        echo 'Saved!';
        return mysqli_query($conn, $sql);



    }
}


function select_from_db($conn, $sql)
{
    $result = $conn->query($sql);

    $ret = $result -> fetch_all(MYSQLI_ASSOC);

    $result -> free_result();

    return $ret;

}

function login_user($conn,$sql)
{
    $username = ($_POST['username']);
    $password = ($_POST['password']);

        $password = md5($password);

        $results = mysqli_query($conn, $sql);

//        if ($results==1){
//            include __DIR__."../views/panel/user.html";
//        }
}



//new___ ALIREZA
function upload_img($conn, $user_id){

    $user_information = select_from_db($conn, " SELECT * FROM `users` WHERE `id`= $user_id");

    $filename = $_FILES['file']['name'];

    //select directory
    if (is_dir("uploaded/img/".$user_information['name']."/")){
        $target_dir = "uploaded/img/".$user_information['name']."/";
    }else{
        $target_dir = mkdir("uploaded/img/".$user_information['name']."/",0775);
    }

    $target_file = $target_dir . $_FILES["file"]["name"];

    // Select file type
    $imgFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif","svg");

    // Check extension
    if( in_array($imgFileType,$extensions_arr) ){
        if (!file_exists($target_file)) {
            // Upload
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            // Insert record
            $sql = "INSERT INTO `media_img` (`user_id`,`filename`,`address`) VALUES ('" . $user_id . "','" . $filename . "','" . $target_file . "')";
            mysqli_query($conn, $sql);
            echo "Upload successfully.";
        }else{
            echo "File is already exists";
        }

    }else{
        echo "Invalid file extension.";
    }

}
//new
function upload_video($conn, $user_id){

    $user_information = select_from_db($conn, " SELECT * FROM `users` WHERE `id`= $user_id");

    $filename = $_FILES['file']['name'];

    //select directory
    if (is_dir("uploaded/video/".$user_information['name']."/")){
        $target_dir = "uploaded/video/".$user_information['name']."/";
    }else{
        $target_dir = mkdir("uploaded/video/".$user_information['name']."/",0775);
    }

    $target_file = $target_dir . $_FILES["file"]["name"];

    // Select file type
    $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("webm","mkv","flv","gif","avi","wmv","mp4","3gp");

    // Check extension
    if( in_array($videoFileType,$extensions_arr) ){
        if (!file_exists($target_file)) {
            // Upload
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            // Insert record
            $sql = "INSERT INTO `media_video` (`user_id`,`filename`,`address`) VALUES ('" . $user_id . "','" . $filename . "','" . $target_file . "')";
            mysqli_query($conn, $sql);
            echo "Upload successfully.";
        }else{
            echo "File is already exists";
        }

    }else{
        echo "Invalid file extension.";
    }

}
//new
function upload_music($conn, $user_id){

    $user_information = select_from_db($conn, " SELECT * FROM `users` WHERE `id`= $user_id");

    $filename = $_FILES['file']['name'];

    //select directory
    if (is_dir("uploaded/music/".$user_information['name']."/")){
        $target_dir = "uploaded/music/".$user_information['name']."/";
    }else{
        $target_dir = mkdir("uploaded/music/".$user_information['name']."/",0775);
    }

    $target_file = $target_dir . $_FILES["file"]["name"];

    // Select file type
    $musicFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("mp3","m4a","m4p","mp2");

    // Check extension
    if( in_array($musicFileType,$extensions_arr) ){
        if (!file_exists($target_file)) {
            // Upload
            move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
            // Insert record
            $sql = "INSERT INTO `media_music` (`user_id`,`filename`,`address`) VALUES ('" . $user_id . "','" . $filename . "','" . $target_file . "')";
            mysqli_query($conn, $sql);
            echo "Upload successfully.";
        }else{
            echo "File is already exists";
        }

    }else{
        echo "Invalid file extension.";
    }

}