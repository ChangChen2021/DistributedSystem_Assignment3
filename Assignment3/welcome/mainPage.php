<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  <title>HR MANAGEMENT 2021</title>
 
</head>
<body>
<div class="container">
  <div id="splitlayout" class="splitlayout">
    <div class="intro">
      <div class="side side-left">
          <div class="title">
            <h1>HR MANAG</h1>
            <p>MANAGE YOUR&nbsp;</p>
          </div>
        
        <div class="intro-content">
          <!-- Ali Morshedlou, https://unsplash.com/photos/WMD64tMfc4k -->
          <div class="profile"><img src="./asset/employee.jpg" alt="profile1"></div>
          <br><br>
          <h1>EMPLOYEE PORTAL</h1>
        </div>
        <div class="overlay"></div>
      </div>
      <div class="side side-right">
        <div class="title">
            <h1>EMENT 2021</h1>
            <p>&nbsp;TEAM HERE!</p>

          </div>
        <div class="intro-content">
          <!-- Roland Samuel, https://unsplash.com/photos/MZ5A24H1JqU -->
          <div class="profile"><img src="./asset/boss.jpg" alt="profile2"></div> 
          <br><br>
          <h1>MANAGER PORTAL</h1>
        </div>
        <div class="overlay"></div>
      </div>
    </div><!-- /intro -->
    <div class="page page-right">
      <div class="page-inner">
        <section>
          <h2>VIEW ALL THE PERSONAL INFORMATION OF YOUR EMPLOYEES/TEAM MEMBERS HERE!</h2>
          <h4> HR MANAGEMENT 2021 is here to help every team leader/management stuff of a company to collect/manage the personal information of all team members/employees. </h4>
          <h5>STEPS FOR GUIDANCE:</h5>
          <p>1. Press the BUTTON below.</p>
          <p>2. Sign up in our website.</p>
          <p>3. The personal information of all is listed.</p>
          <p>4. Search and browse as you like.</p>
          <p>5. Press to see details.</p>
        </section>	
        <button class="logButton" onclick="location.href='../login/login.php?userType=boss'" type="button">
          JOIN US NOW!</button>								
      </div><!-- /page-inner -->
    </div><!-- /page-right -->
    <div class="page page-left">
      <div class="page-inner">
        <section>
          <h2>SUBMIT/UPDATE YOUR PERSONAL INFORMATION HERE!</h2>
          <h4> HR MANAGEMENT 2021 is here to help every member of a company/team to share the personal information easily with the managers/leaders. The whole won't take over 10 minutes. </h4>
          <h5>STEPS FOR GUIDANCE:</h5>
          <p>1. Press the BUTTON below.</p>
          <p>2. Sign up in our website.</p>
          <p>3. Fill in your personal information.</p>
          <p>4. Your information will be sent to the management stuff of your company/team auntomatically!</p>
          <p>5. Perfectly done!</p>
        </section>
        <button class="logButton" onclick="location.href='../login/login.php?userType=employee'" type="button">
          JOIN US NOW!</button>
      </div><!-- /page-inner -->
    </div><!-- /page-left -->
    <a href="#" class="back back-right" title="back to intro">&rarr;</a>
    <a href="#" class="back back-left" title="back to intro">&larr;</a>
  </div><!-- /splitlayout -->
</div><!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".side-left .intro-content").click(function(){
    	$(".splitlayout").addClass("open-left");
    	$(".splitlayout").removeClass("close-right reset-layout");
    });

    $(".back-right").click(function(){
    	$(".splitlayout").removeClass("open-left");
    	$(".splitlayout").addClass("close-left reset-layout");
    });

    $(".side-right .intro-content").click(function(){
    	$(".splitlayout").addClass("open-right");
    	$(".splitlayout").removeClass("close-left reset-layout");
    });

    $(".back-left").click(function(){
    	$(".splitlayout").removeClass("open-right");
    	$(".splitlayout").addClass("close-right reset-layout");
    });
});
</script>
</body>
</html>
