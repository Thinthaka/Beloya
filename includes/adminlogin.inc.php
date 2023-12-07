<?php
if(isset($_POST['admin-login-Submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uname'];
    $password = $_POST['pwd'];

    if(empty($username) || empty($password)){
        header("Location: ../index.php?emptyfields");
    exit();
    }
    else{
        $sql = "SELECT * FROM admins WHERE username=? ";
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
                //$pwdChk = strcmp($password, $row['pword']);
                
               
                if($password == $row['pword']) {
                    
                    header("Location: ../admindashboard.php?login=succes");
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