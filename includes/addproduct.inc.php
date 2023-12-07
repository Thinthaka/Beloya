<?php

if(isset($_POST['add-product'])){

    require 'dbh.inc.php';

    $name = $_POST['productname'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;
    
    $image1 = $_FILES['image1']['name'];
    $image1_size = $_FILES['image1']['size'];
    $image1_tmp_name = $_FILES['image1']['tmp_name'];
    $image1_folder = 'uploaded_img/'.$image1;

    
    $image2 = $_FILES['image2']['name'];
    $image2_size = $_FILES['image2']['size'];
    $image2_tmp_name = $_FILES['image2']['tmp_name'];
    $image2_folder = 'uploaded_img/'.$image2;

    if(empty($name) || empty($description) || empty($price)){
        header("Location: ../addproduct.php?error=emptyfield");
        exit();
    }
    else{

        $sql = "SELECT pid FROM `products` WHERE pid=?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../addproduct.php?error=sqlerror");
            exit();
        }

        else{
            mysqli_stmt_bind_param($stmt, "s", $name);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheack = mysqli_stmt_num_rows($stmt);
            if($resultcheack > 0){
                header("Location: ../addproduct.php?error=usernametaken");
                exit();
            }
            else{
                $sql = "INSERT INTO `products`(name,description, price, image, image1, image2) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../addproduct.php?error=sqlerror");
                    exit();
                }
                else{
                    mysqli_stmt_bind_param($stmt, "ssisss", $name, $description, $price, $image, $image1, $image2);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    move_uploaded_file($image_tmp_name, $image_folder);
                    move_uploaded_file($image1_tmp_name, $image1_folder);
                    move_uploaded_file($image2_tmp_name, $image2_folder);

                    header("Location: ../addproduct.php?productaddedsuccess");
                    exit();


                }
                
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>