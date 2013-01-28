<!DOCTYPE html>
<html>
  <head>
    <title>Clothes LA Mockup for Rebecca</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
    	<?php 
    	$this->load->view('layout/header'); //load the header layout
    	?>
      <div class="row">
        <div class="span5">
          <?php $this->load->view($view_left); ?>
        </div>
        <div class="span7">
          <?php $this->load->view($view_right); ?>
        </div>
      <?php
    	$this->load->view('layout/footer'); //load the footer layout
    	?>
    </div>
  </body>
</html>

