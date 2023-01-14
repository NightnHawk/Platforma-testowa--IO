<?php
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
            if($fileSize<1000000){//Rozmiar pliku mniejszy niż 1gb
                $fileNewName = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'uploads/' . $fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");
            } else{
                echo "Your file is too big!";
            }

        } else{
            echo "There was an error uploading your file!";
        }
    } else{
        echo "You cannot upload files of this type!";
    }
}