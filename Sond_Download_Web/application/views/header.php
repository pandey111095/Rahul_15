<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">Gaana World</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url('Bhojpuri'); ?>">Bhojpuri</a></li>
        <li><a href="<?php echo base_url('Hindi'); ?>">Hindi</a></li>
        <li><a href="<?php echo base_url('English'); ?>">English</a></li>
        
      </ul>
     <ul class="nav navbar-nav navbar-right">
         <?php if (!$this->session->userdata('id') == TRUE) :?>
        <li style="color: white;"><?= anchor('Login','Login/Signup')   ?></li>
        <?php else: ?>
         <li style="color: white;"><?= anchor('Login/logout','Logout')   ?></li>
          <?php endif; ?>

      </ul>
      
    </div>
  </div>
</nav>