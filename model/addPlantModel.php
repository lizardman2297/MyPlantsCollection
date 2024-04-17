<?php

    

    // var_dump($_POST);

// 1 transfer files

$target_dir = "../plantsPicture/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
// if ($_FILES["picture"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// 2 insert data into database

require_once("database.php");

$db = dbConnect();

// var_dump($db);

$latin = $_POST["latin"];
$vernacular = $_POST["vernacular"];
$nickname = $_POST["nickname"];
$state = $_POST["statePlant"];
$date = $_POST["obtainedDate"];
$fav = $_POST["fav"];

$reqPlant = "INSERT INTO plants (latinName, vernacularName, nickname, statePlants, obtainedDate, fav) VALUES ('$latin', '$vernacular', '$nickname', $state, '$date', $fav)";

$db->query($reqPlant);

$id = $db->query("SELECT MAX(id) as id FROM plants")->fetchObject()->id;

$reqPicture = "INSERT INTO PICTURE (idPlants, pictureDate, pictureLink) VALUES ($id, $date, '$target_file')";
$db->query($reqPicture);

header('location: ../index.php');



