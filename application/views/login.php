<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($this->session->userdata['logged_in']['username'])) {
	header("Location: ".base_url() ."firststep/"); /* Redirect browser */
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
	<?php include('ui/header.php');?>
<body>
	<div class="signpanel-wrapper">
      <div class="signbox">
        <form method="post" action="<?php echo portal_url()?>login" autocomplete="off">
          <div class="signbox-header">
            <h4>First Step</h4>
            <p class="mg-b-0">Make a login to access your Details</p>
          </div><!-- signbox-header -->
          <div class="signbox-body">
            <div class="form-group">
              <label class="form-control-label">Username:</label>
              <input type="text" name="username" placeholder="Enter your username" class="form-control">
            </div><!-- form-group -->
            <div class="form-group">
              <label class="form-control-label">Password:</label>
              <input type="password" name="password" placeholder="Enter your password" class="form-control">
            </div><!-- form-group -->
            <div class="form-group">
              <a href="">Forgot password?</a>
            </div><!-- form-group -->
            <button class="btn btn-dark btn-block">Sign In</button>
            <?php if(isset($message)){
            ?>
            <div style="color: green;" class="tx-center bd pd-10 mg-t-40"><?php echo $message;?></div>    
           <?php }?>
            
          </div><!-- signbox-body -->
        </form>
      </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->

    <script src="<?php echo asset_url()?>lib/jquery/jquery.js"></script>
    <script src="<?php echo asset_url()?>lib/popper.js/popper.js"></script>
    <script src="<?php echo asset_url()?>lib/bootstrap/bootstrap.js"></script>
</body>
</html>