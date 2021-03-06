<?php 
require_once("includes/header.php");
require_once("includes/classes/videoUploadData.php");
require_once("includes/classes/videoProcessor.php");

if(!isset($_POST["uploadButton"])) {
    echo "No file sent to page.";
    exit();
}

// 1) create file upload data
$videoUpoadData = new VideoUploadData(
                            $_FILES["fileInput"], 
                            $_POST["titleInput"],
                            $_POST["descriptionInput"],
                            $_POST["privacyInput"],
                            $_POST["categoryInput"],
                            $userLoggedInObj->getUsername()    
                        );

// 2) Process video data (upload)
$videoProcessor = new VideoProcessor($con);
$wasSuccessful = $videoProcessor->upload($videoUpoadData);

// 3) Check if upload was successful
if($wasSuccessful) {
    echo "Upload successful";
}
?>