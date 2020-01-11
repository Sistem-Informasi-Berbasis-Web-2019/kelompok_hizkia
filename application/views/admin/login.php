
<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login</title>

  <!-- Favicons-->
  <link rel="icon" href="<?php echo base_url()?>assets/admin/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/admin/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="<?php echo base_url()?>assets/admin/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="<?php echo base_url()?>assets/admin/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url()?>assets/admin/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="green">



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <?php if(isset($error)){echo $error;};?>
      <form method="post" action="<?php echo base_url()?>adminlla">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="Username" name="username" type="text" required="" placeholder="username">
           <?php echo form_error('username'); ?>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="Password" name="password" type="password" required="" placeholder="password">
            <?php echo form_error('password'); ?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" name="submit" class="btn waves-effect waves-light col s12">Login</button>
          </div>
        </div>      
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" href="<?php echo base_url()?>assets/admin/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" href="<?php echo base_url()?>assets/admin/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" href="<?php echo base_url()?>assets/admin/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" href="<?php echo base_url()?>assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" href="<?php echo base_url()?>assets/admin/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" href="<?php echo base_url()?>assets/admin/js/custom-script.js"></script>

</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2017 02:20:50 GMT -->
</html>