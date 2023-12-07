<?php
if(isset($_POST['reg-submit'])){

    require 'dbh.inc.php';

    $firstname = $_POST['fname'];
    $username = $_POST['uname'];
    $email = $_POST['mail'];
    $phonemumber = $_POST['tno'];
    $password = $_POST['pwd'];
    $cpassword = $_POST['cpwd'];

    if(empty($firstname) || empty($username) || empty($email) || empty($phonemumber) || empty($password) || empty($cpassword)){
        header("Location: ../sigup.php?error=emptyfield");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/", $username)){
        header("Location: ../sigup.php?error=invaliedmail&username");
        exit();
    }
    else if($password !== $cpassword){
        header("Location: ../sigup.php?error=passwordcheak");
        exit();
    }
    else{

        $sql = "SELECT userid FROM users WHERE userid=?";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../sigup.php?error=sqlerror");
            exit();
        }

        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheack = mysqli_stmt_num_rows($stmt);

            if($resultcheack > 0){
                header("Location: ../sigup.php?error=usernametaken");
                exit();
            }
            else{
                $sql = "INSERT INTO users (firstname, username, email, phonenumber, pwd) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../sigup.php?error=sqlerror");
                    exit();
                }
                else{
                    $hashPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssis", $firstname, $username, $email, $phonemumber, $hashPwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    header("Location: ../index.php?signup=success");
                    exit();

                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else{
    header("Location: ../sigup.php");
    exit();
}
