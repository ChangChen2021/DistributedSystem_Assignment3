<?php 
  //written by Chang
  include_once "header.php";
?>
  <div class="gallery-section" id="gallery">
      <?php 
        $selector = $_GET['selector'];
        $validator = $_GET['validator'];
        //clarify user's identification and enter a new password
        if(empty($selector)||empty($validator)){
          echo "Could not validate your request!";
        }else{
          if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
            ?>
          <div class="reset-section">
            <div class="fillin-section">
              <form action="includes/reset-password.inc.php" method="post">
                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                <div class="reset-container" id="container">
                  <input type="password" name="pwd" placeholder="Enter a new password..." ?>">
                </div>
                <div class="reset-container" id="container">
                  <input type="password" name="pwd-repeat" placeholder="Repeat the new password..." ?>">
                </div>
                <div class="sent-button" id="button">
                  <button type="submit" name="reset-password-submit">Reset password</button>
                </div>
              </form>
            </div>
          </div>
            <?php
          }
        }
      ?>
  </div>
<?php 
    include_once 'footer.php';
?>