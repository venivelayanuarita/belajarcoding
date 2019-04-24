<?php $this->load->view('layout/css') ?>

    <form class="form-login" action="<?php echo site_url('login/proses_login') ?>" id="signin" method="post">
    <h2 class="form-login-heading">sign in now</h2>
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <label class="checkbox"></label>
        
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
         <input type="hidden" name="login" value="1">
          <input name="login1" type="submit" id="login" class="btn btn-theme btn-block" value="Sign In">
        </div>
       
      </div>
    </form>     
      
      </div>
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>assets/js/jquery.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?=base_url()?>assets/img/login-bg.jpg", {speed: 500});
    </script>


<!-- /.login-box -->
<?php $this->load->view('layout/js') ?>

<!-- jQuery -->
