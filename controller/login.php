<?php
if (empty($_POST["email"])) {
    die("Email is required");
}

if (empty($_POST["password"])) {
    die("Passord is required");
}
$mysqli = require __DIR__ . "/database.php";
$sql = "SELECT * FROM user WHERE email = ?";
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("s",$_POST["email"]);
try{
    session_start();
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    if($user){
        if(password_verify($_POST['password'],$user['password'])){
            
            session_regenerate_id();
            $_SESSION['msg'] = '';
            $_SESSION['userid'] = $user['id'];
            header("Location:../pages/dashboard.php");
            exit;
        }
    }
    else{
        $_SESSION['msg'] = 'Login Failed';
        header("Location:../pages/login.php");

    }
   
}
catch(Exception $e){
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}


?>