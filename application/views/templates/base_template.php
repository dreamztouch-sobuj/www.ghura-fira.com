<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ghura-Fira</title>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <link href="https://fonts.googleapis.com/css?family=Cookie|PT+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/nav.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/top-banner-position.js"></script>
        
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        
    </head>

    <body>
        <?php $this->load->view('includes/header') ?>
        
        <?php
        if (!file_exists(APPPATH . 'views/' . $content . '.php')){
            echo "Page Not Found"; 
        }
        else{
            $this->load->view($content);
        }
        ?>
        
        <?php $this->load->view('includes/footer') ?>
    </body>
</html>