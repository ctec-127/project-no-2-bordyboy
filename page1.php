<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 1</title>
</head>

<?php require('inc/header.inc.php') ?>

<body>

<div class="container">
    <div class="jumbotron">
        <h5>You will be writing an url query to create your profile. Start by changing the "page1.php" to "page2.php" then type "?" in the url followed by each parameter names and values. Use the "&" characther between each parameter.<br> Example "page2.php?gender=helicopter&firstname=Sikorsky"</h4>
        <br>
        <ul>
            <h4>Please enter your gender using the "gender" parameter</h4>
            <h4>Please enter your first name using the "firstname" parameter</h4>
            <h4>Please enter your last name using the "lastname" parameter</h4>
            <h4>Please enter your tool name using the "toolname" parameter</h4>
            <h4>Please enter the sharpness of your tool (from 1 to 5) using the "sharpness" parameter</h4>
            <h4>Please specify if you want to enable dark mode (yes/no) by using the "theme" parameter</h4>
            <h4>Do you want to see the "I like turtles" video (yes/no)? Use the "solution" parameter!</h4>
        </ul>
    </div>
</div>
<?php require('inc/footer.inc.php') ?>
<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>