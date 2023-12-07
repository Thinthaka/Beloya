<?php

if(isset($_POST['edit-product'])){

    include 'dbh.inc.php';

    $update_p_id = $_POST['edit-id'];
    $update_name = $_POST['update_name'];
    $update_description = $_POST['update_description'];
    $update_price = $_POST['update_price'];

    mysqli_query($conn, "UPDATE products SET name = '$update_name', description = '$update_description', price = '$update_price' WHERE pid = '$update_p_id'") or die('query failed');

    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_folder = 'uploaded_img/'.$update_image;
    $update_old_image = $_POST['update_old_image'];

    $update_image1 = $_FILES['update_image1']['name'];
    $update_image_tmp_name1 = $_FILES['update_image1']['tmp_name'];
    $update_image_size1 = $_FILES['update_image1']['size'];
    $update_folder1 = 'uploaded_img/'.$update_image1;
    $update_old_image1 = $_POST['update_old_image1'];

    $update_image2 = $_FILES['update_image2']['name'];
    $update_image_tmp_name2 = $_FILES['update_image2']['tmp_name'];
    $update_image_size2 = $_FILES['update_image2']['size'];
    $update_folder2 = 'uploaded_img/'.$update_image2;
    $update_old_image2 = $_POST['update_old_image2'];

    
    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message[] = 'image file size is too large';
        }
        else{
            mysqli_query($conn, "UPDATE products SET image = '$update_image', image1 = '$update_image1', image2 = '$update_image2' WHERE pid = '$update_p_id'") or die('query failed');
            move_uploaded_file($update_image_tmp_name, $update_folder);
            move_uploaded_file($update_image_tmp_name1, $update_folder1);
            move_uploaded_file($update_image_tmp_name2, $update_folder2);
            unlink('uploaded_img/'.$update_old_image);
            unlink('uploaded_img/'.$update_old_image1);
            unlink('uploaded_img/'.$update_old_image2);
        }
    }

    header('location: ../manageproduct.php?updated');

}
else{
    header('location: ../editproduct.php?notupdated');
}

?>