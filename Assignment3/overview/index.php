<?php
    require "./includes/index.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- written by Mingzhe Gu -->

<head>
    <meta charset="UTF-8">
    <title>Overview</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="resume">
        <section class="profile section-padding">
            <div class="container">
                <div class="picture">
                    <div class="headpic">
                        <span><img src="../asset/picture/logo_dark.png" alt="" /></span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="name-wrapper">
                    <?php echo "<h1>$name</h1>"; ?>
                    <!-- YOUR NAME AND LAST NAME  -->
                </div>
                <div class="clearfix"></div>
                <div class="contact-info clearfix">
                    <ul class="list-titles">
                        <li>Call</li>
                        <li>Mail</li>
                        <li>Birthday</li>
                    </ul>
                    <ul class="list-content ">
                        <!-- PHONE NUMBER  -->
                        <?php echo "<li>$phone</li>"; ?>
                        <!-- EMAIL -->
                        <?php echo "<li>$email</li>"; ?>
                        <!-- BIRTHDAY -->
                        <?php echo "<li>$birthday</li>"; ?>
                    </ul>
                </div>
            </div>
        </section>

        <section class="description section-padding">
            <div class="container">
                <h3 class="description-title">Position</h3>

                <div class="description-wrapper">
                    <div class="department-wrapper clearfix">
                        <!-- NAME OF THE DEPARTMENT  -->
                        <div class="department-title">GWC Employee</div>
                    </div>

                    <div class="job-wrapper clearfix">
                        <!-- POSITION TITLE  -->
                        <?php echo "<div class=\"description-content\">$position</div>" ?>
                    </div>


                </div>
            </div>
            <div class="container">
                <!-- SELF INTRODUCTION -->
                <h3 class="description-title">Self-Introduction</h3>
                <div class="self-intro clearfix">
                    <div class="description-content">
                        <?php echo "<p>$description</p>"?>
                    </div>
                </div>

            </div>
            <!-- Back Button -->
            <div class="backButton">
                <i onclick="goBack()" class="fa fa-window-close-o" id="back"></i>
                <script>
                function goBack() {
                    window.history.back();
                }
                </script>
                <style>
                #back {
                    position: fixed;
                    top: 8%;
                    right: 6%;
                    color: whitesmoke;
                    font-size: 4em;
                }
                </style>
            </div>
        </section>
    </div>
    </div>
</body>

</html>