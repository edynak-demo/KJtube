<?php 
require_once("includes/config.php");
require_once("includes/classes/user.php");
require_once("includes/classes/video.php");
require_once("includes/classes/videoGrid.php");
require_once("includes/classes/videoGridItem.php");

$usernameLoggedIn = User::isLoggedIn() ? $_SESSION["userLoggedIn"] : "";
$userLoggedInObj = new User($con, $usernameLoggedIn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KJtube</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="assets/js/commonActions.js"></script>
  <script src="assets/js/userActions.js"></script>


</head>
<body>
  <div id="pageContainer">
    <div id=mastHead>
      <button class="navShowHide"><img src="assets/images/icons/menu.png"></button>

      <a class="logo" href="index.php">
        <img src="assets/images/icons/KJtube.png" title="logo" alt="KJtube site logo">
      </a>

      <div class="searchBarContainer">
        <form action="search.php" method="GET">
          <input type="text" class="searchBar" name="term" placeholder="Search...">
          <button class="searchButton">
            <img src="assets/images/icons/search.png">
          </button>
        </form>
      </div>
      <div class="rightIcons">
        <a href="upload.php">
          <img class="upload" src="assets/images/icons/upload.png">
        </a>
        <a href="#">
          <img class="upload" src="assets/images/profileImages/default.png">
        </a>
      </div>
    </div>

    <div id="sideNav" style="display:none;">
    
    </div>

    <div id="mainSection">

      <div id="mainContent">

