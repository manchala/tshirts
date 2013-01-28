<!DOCTYPE html>
<html>
  <head>
    <title>Clothes LA Mockup for Rebecca</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    	<?php 
    	$this->load->view('layout/header'); //load the header layout
      ?>
      <div class="row">
        <div class="span4">
          <?php $this->load->view($view_sidebar); ?>
        </div>
        <div class="span8">
          <?php $this->load->view($view); ?>
        </div>
      <?php
    	$this->load->view('layout/footer'); //load the footer layout
    	?>
    </div>
  </body>
</html>

