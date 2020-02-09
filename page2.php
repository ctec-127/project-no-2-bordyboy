<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Project 2 - Page 2</title>
</head>
<?php 

    require('inc/header.inc.php');

    
    if ($_SERVER['REQUEST_METHOD'] == "GET") {

        $genderv = false;
        $firstnamev = false;
        $lastnamev = false;
        $toolnamev = false;
        $sharpnessv = false;
        $themev = false;
        $videov = false;
        $firstname = '';
        $lastname = '';

        if (isset($_GET['gender'])) {
            $genderv = true;
            $gender = $_GET['gender'];
        }
        if (isset($_GET['firstname'])) {
            $firstnamev = true;
            $firstname = $_GET['firstname'];
        }
        if (isset($_GET['lastname'])) {
            $lastnamev = true;
            $lastname = $_GET['lastname'];
        }
        if (isset($_GET['toolname'])) {
            $toolnamev = true;
            $toolname = $_GET['toolname'];
        }
        if (isset($_GET['sharpness'])) {
            $sharpnessv = true;
            $sharpness = "sharper than All Star himself";
        }
        if (isset($_GET['theme'])) {
            $themev = true;
        }
        if (isset($_GET['video'])) {
            $videov = true;
        }
    }

    
?>
<?php 

if ($themev) {
    echo "<body style=\"background-color:gray\">";
}

?>


<div class="container">
    <h4 class="text-center">Hello <?php echo ($firstnamev ? $firstname : "NoName");?> <?php echo ($lastnamev ? $lastname : "nn"); ?>, fellow <?php echo ($genderv ? $gender : "human");?>. Welcome to Bogdan's shed. I see that your brought with you a <?php echo ($toolnamev ? $toolname : "tool");?> <?php echo ($sharpnessv ? $sharpness : "");?>. <?php echo ($videov ? "<a href=\"https://www.youtube.com/watch?v=dQw4w9WgXcQ\" target=\"_blank\">Here</a> is the video you asked for!" : "");?> </h4>
    <br>

    <?php  
    if ($firstnamev || $lastnamev) {
        echo "<div class=\"turtlesContainer\"><img class=\"turtles\" src=\"img/turtles.png\" alt=\"The I like turtles kid\">
        <div class=\"turtlesText\">I like {$firstname} {$lastname}</div></div>";
    }


    ?>

</div>




<?php require('inc/footer.inc.php') ?>

<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>