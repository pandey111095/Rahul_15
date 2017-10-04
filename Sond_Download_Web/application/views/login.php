<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<?= link_tag('assets/css/bootstrap.min.css')?>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php include('header.php'); ?>
<body>

<div class="container">

<?php echo form_open('Login/do_login',['class'=>'form-horizontal']);?>
  <fieldset>
    <legend>Login  <div><a href="<?php echo base_url('Signup') ?>" class="btn btn primary" style="margin-left: 600px;">Signup</a></div></legend>
    <?php if( $error =$this->session->flashdata('login_failed')): ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="alert alert-dismissible alert-warning">
        <?= $error; ?>
    </div>
    </div>
    </div>
  <?php endif; ?>
    <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10"  >
      <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]);  ?>
       <!-- <input class="form-control" id="inputEmail" placeholder="Username" type="text"> -->
       </div>
       </div>
      </div>
      <div class="col-lg-6"  >
       <?php echo form_error('username'); ?>
      </div>
      </div>
      <div class="row">
    <div class="col-lg-6"  >
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']);  ?>
        <!--<input class="form-control" id="inputPassword" placeholder="Password" type="password">-->
         </div>
         </div>
         </div>
         <div class="col-lg-6"  >
         <?php echo form_error('password'); ?>
         </div>
         </div>
         </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <?php echo form_submit('submit','Login',['class'=>'btn btn-primary']);?>
       <!--<button type="submit" class="btn btn-primary">Login</button>-->
      </div>
    </div>
   </fieldset>


  </form>
  
</div>
</body>
</html>
