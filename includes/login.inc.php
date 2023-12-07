<?php
if(isset($_POST['login-Submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uname'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        header("Location: ../index.php?emptyfields");
    exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE username=? ";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt); 

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheack = password_verify($password, $row['pwd']);
                if($pwdCheack == false){
                    header("Location: ../index.php?error=wrongPassword");
                    exit();
                }
                else if($pwdCheack == true) {
                    session_start();
                    $_SESSION['uId'] = $row['userid'];
                    $_SESSION['Uname'] = $row['username'];
                    
                    header("Location: ../index.php?login=succes");
                }
                else{
                    header("Location: ../index.php?error=wrongPassword");
                    exit();
                }
            }
            else{
                header("Location: ../index.php?error=NoUser");
                exit();
            }
        }

    }

}
else{
    header("Location: ../index.php");
    exit();
}