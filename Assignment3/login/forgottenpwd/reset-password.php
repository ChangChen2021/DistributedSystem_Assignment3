<?php 
  //Written by Chang Chen
  include_once "header.php";
?>	
  <div class="reset-section">
    <div class="title-section">
			<h1>Reset Your Password</h1>
      <p>An e-mail will be sent to you with instructions on how 
        to reset your password.</p>
    </div>
    <div class="fillin-section">
      <form action = "includes/reset-request.inc.php" method="post">
        <div class="reset-container" id="container">
          <input type = "text" name = "email" placeholder = "Enter your email address...">
        </div>
        <div class="sent-button" id="button">
          <button type = "submit" name = "reset-request-submit">Reset My Password</button>
        </div>
      </form>
    </div>
    <?php 
      if(isset($_GET["reset"])){
        if($_GET["reset"] == "success"){
          echo '<p class="signupsuccess">Check your email!</p>';
        }
      }
    ?>
  </div>
<?php 
    include_once 'footer.php';
?>