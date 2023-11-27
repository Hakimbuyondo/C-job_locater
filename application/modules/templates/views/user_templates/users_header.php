<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>C-JOB LOCATER</title>


        <!-- Slideshow CSS -->
        <link href="<?php echo base_url(); ?>/assets/custom_assets/slideshow.css" rel="stylesheet" type="text/css">


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/layout.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>/assets/css/extras/animate.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->




    <style type="text/css">
        .form-control{
            padding-left: 10px;
        }

        .login-content{
            background-image: url('<?php echo base_url(); ?>assets/users/bg/sky.png');
            background-size: cover;
        }
    </style>
  
</head>


      <!-- Content area -->
      <div class="content login-content">

      <!-- Check for the flash message -->
      <?php if($this->session->flashdata('user_registered')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('user_registered'); ?>
            </p>
      <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('login_failed')): ?>
            <p class="alert alert-danger">
                <?php echo $this->session->flashdata('login_failed'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('logged_out')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('logged_out'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('login_needed')): ?>
            <p class="alert alert-danger">
                <?php echo $this->session->flashdata('login_needed'); ?>
            </p>
        <?php endif; ?>