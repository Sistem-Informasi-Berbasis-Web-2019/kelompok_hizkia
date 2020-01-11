<?php
// $user = $this->session->userdata('username');
// if (!isset($user)) {
//     echo '<script>
// alert("Anda Belum Login");
// document.location.href="'.base_url('login').'";
// </script>';
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Admin LLA</title> 

  
  <link rel="icon" href="<?php echo base_url()?>assets/admin/images/favicon/favicon-32x32.png" sizes="32x32">
  
  <!-- CORE CSS-->
  
  <link href="<?php echo base_url()?>assets/admin/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="<?php echo base_url()?>assets/admin/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  


  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?php echo base_url()?>assets/admin/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?php echo base_url()?>assets/admin/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>
  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

 
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
     <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                   
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>adminlla/logout"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Welcome<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Admin</p>
                </div>
            </div>
            </li>

            <li class="bold "><a href="<?php echo base_url()?>dashboard" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            
            <li class="bold "><a href="<?php echo base_url()?>pendaftar" class="waves-effect waves-cyan"><i class="mdi-content-send"></i> Pendaftar</a>
            </li>
            
            <li class="bold active"><a href="<?php echo base_url()?>galeri" class="waves-effect waves-cyan"><i class="mdi-image-collections"></i> Gallery</a>
            </li>

            <li class="bold"><a href="<?php echo base_url()?>user" class="waves-effect waves-cyan"><i class="mdi-social-people"></i> User</a></li>

            <li class="bold "><a target="_blank" href="<?php echo base_url()?>laporan" class="waves-effect waves-cyan"><i class="mdi-action-print"></i> Laporan</a>
            </li>
          <!--   <li class="li-hover"><div class="divider"></div></li> -->
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <section id="content">
         <div class="container">
          <div id="table-datatables" class="section">
            <div class="divider"></div>

 <?php 
if ($this->session->flashdata('berhasil')) {
  echo '<script>
alert("'.$this->session->flashdata('berhasil').'");
</script>';
}elseif ($this->session->flashdata('gagal')) {
  echo '<script>
alert("'.$this->session->flashdata('gagal').'");
</script>';
}
?> 
              
              <div class="card-panel">
                <h4 class="header2">Upload Gambar</h4>
                <div class="row">
                  <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>Galeri/tambah">
                    <div class="input-field col s12">
                      <input type="text" name="judul" required="">
                      <label >Judul</label>
                    </div>

                   <div id="file-upload" class="section">
                      <div class="row section">
                        <div class="col s12">
                          <input type="file" id="input-file-now" name="gambar" class="dropify" data-max-file-size="5M" data-default-file="" required="" />
                        </div>
                      </div>
                    </div>

                    <div class="input-field col s4">
                      <input class="btn green" type="submit" name="submit" value="Simpan">
                    </div>
                  </form>
                </div>
              </div>



                  <!-- Data User-->
              <div class="card-panel">
                <h4 class="header2">Galeri</h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                      <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php $no=1;
                      foreach($image as $gambar):?>
                      <tr>
                        <td><?php echo $no++;?></td>
                        <td><img materialboxed class="materialboxed" data-caption="<?php echo $gambar->judul;?>" src="<?php echo base_url()?>assets/galeri/<?php echo $gambar->gambar;?>" width="100" height="100"></td>
                        <td><?php echo $gambar->judul?></td>
                        <td><a onclick="return confirm('Yakin?');" href="<?php echo base_url()?>Galeri/hapus/<?php echo $gambar->id?>/<?php echo $gambar->gambar?>" class="btn danger"><i class="mdi-action-delete"></i></a></td>
                      </tr>
                    <?php endforeach?>
                    </tbody>
                  </table>
                </div>
        

          </div>
        </div>
      </section>
    </div>
  </div>



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.</span>
        <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
  
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/materialize.min.js"></script>
    <!--prism-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/chartist-js/chartist.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/custom-script.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/plugins/dropify/js/dropify.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('.dropify-event').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.filename + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });
        });
    </script>
    


    <script type="text/javascript">
        /*Show entries on click hide*/
        $(document).ready(function(){
            $(".dropdown-content.select-dropdown li").on( "click", function() {
                var that = this;
                setTimeout(function(){
                if($(that).parent().hasClass('active')){
                        $(that).parent().removeClass('active');
                        $(that).parent().hide();
                }
                },100);
            });
        });
    </script>
</body>

<!-- Mirrored from demo.geekslabs.com/materialize/v3.1/app-widget.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jul 2017 02:19:56 GMT -->
</html>