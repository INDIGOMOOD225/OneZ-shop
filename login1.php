<?php
include "db_con.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)===1) {
           $row = mysqli_fetch_assoc($result);
           if ($row['user_name'] === $uname && $row['password'] === $password) {
               echo "Logged in!";
        } else {
            header("Location: login.php?error=Incorrect User Name or Password");
            exit();
        }
    }}
}else{
    header("Location: login.php?error=Please Login First");
    exit();
}