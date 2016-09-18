
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MiPiS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/styl-Loader.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/Graduation Cap-26.png">

    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/Alert/dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Alert/dist/sweetalert.css">

    <script src="<?php echo base_url(); ?>assets/js/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/application.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
   
    <script type="text/javascript">
      $(window).load(function() { $(".preload-wrapper").fadeOut("slow"); })
    </script>

    <script language='javascript'>
    function validAngka(a)
    {
      if(!/^[0-9.]+$/.test(a.value))
      {
        a.value = a.value.substring(0,a.value.length-1000);
      }
    }
    </script>

  </head>

  <body background="<?php echo base_url(); ?>../../assets/img/1.jpg">
    <div class="preload-wrapper">
    <div id="preloader5"></div>
  </div>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url();?>index.php/home"><b>MiPiS</b></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url();?>index.php/home"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="<?php echo base_url();?>index.php/informasi"><i class="icon-share icon-white"></i> Informasi</a></li>
              <li><a href="<?php echo base_url();?>index.php/alternativ"><i class="icon-th icon-white"></i> Alternativ</a></li>
              <li><a href="<?php echo base_url();?>index.php/nilai"><i class="icon-pencil icon-white"></i> Nilai</a></li>
              <li><a href="<?php echo base_url();?>index.php/kriteria"><i class="icon-pencil icon-white"></i> Kriteria</a></li>
              <li><a href="<?php echo base_url();?>index.php/nilaiMatrik/tambah"><i class="icon-pencil icon-white"></i> Nilai Matrik</a></li>
              <li><a href="<?php echo base_url();?>index.php/rangking"><i class="icon-list icon-white"></i> Rangking</a></li>
              </li>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
      <div class="well">
        <div class="row">
          <div class="span">
            <table>
              <td><img src="<?php echo base_url(); ?>assets/img/3.png"></td>
              <td><h2>MiPiS ( SAW )</h2>
                  <p>Membantu untuk Memilih Hp Second <p>
              </td>
            </table>
          </div>
        </div>
      </div>

    <div class="well">
      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <div class="container">
            <?php echo $contents; ?>
    <footer class="well" >
      <p><center>Copyright @ SPK_2016</center></p>
    </footer>
  </div> <!-- /container -->

  </body>
</html>
