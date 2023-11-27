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
    </style>
  
</head>



<!-- Main Nav Bar Goes Here -->
    <?php include('includes/main_nav_bar.php');?>
<!-- Main Nav Bar Goes Here -->






  <!-- Page content -->
  <div class="page-content">

<!-- If the system is not logged into this is the main side bar -->
<?php if(!$this->session->userdata('logged_in')): ?>

<?php endif; ?>

<!-- If someone logs into the system  this is the main side bar -->
<?php if($this->session->userdata('logged_in')): ?>
<!-- Main Side Bar goes here-->
<?php include('includes/main_side_bar.php');?>
<!-- Main Side Bar goes here-->
<?php endif; ?>



<!-- Main content -->
    <div class="content-wrapper">

      <!-- page header goes here-->
      <?php include('includes/page_header.php');?>
      <!-- page header goes here-->


      <!-- Content area -->
      <div class="content">

            <!-- Check for the flash message -->
        <?php if($this->session->flashdata('company_registered')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('company_registered'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('company_deleted')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('company_deleted'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('company_edited')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('company_edited'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('application_sent')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('application_sent'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('job_added')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('job_added'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('job_deleted')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('job_deleted'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('worker_registered')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('worker_registered'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('worker_deleted')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('worker_deleted'); ?>
            </p>
        <?php endif; ?>

        <!-- Check for the flash message -->
        <?php if($this->session->flashdata('user_loggedin')): ?>
            <p class="alert alert-success">
                <?php echo $this->session->flashdata('user_loggedin'); ?>
            </p>
        <?php endif; ?>