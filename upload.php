<?php
include_once "imgh.php";
session_start();
$id = $_SESSION["userid"];

if(isset($_POST['pfp-upload'])){
    $file = $_FILES['pfp'];
    print_r($file);
    $fileName = $_FILES['pfp']['name'];
    $fileTmpName = $_FILES['pfp']['tmp_name'];
    $fileSize = $_FILES['pfp']['size'];
    $fileError = $_FILES['pfp']['error'];
    $fileType = $_FILES['pfp']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize<1000000){//Rozmiar pliku mniejszy niż 1mb
                $fileNewName = "profile". $id . "." . "jpg";//$fileActualExt;
                $fileDestination = 'uploads/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                $sql = "UPDATE users SET users_img=0 WHERE users_id='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: profile.php?uploadsuccess");
            } else{
                
                header("Location: profile.php?toobigsize");
                echo "Your file is too big!";
            }

        } else{
            echo "There was an error uploading your file!";
        }
    } else{
        echo "You cannot upload files of this type!";
    }
}