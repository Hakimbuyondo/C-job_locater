
<?php //foreach($j)?>


<div class="col-md-12">
    <div class="row">
		<div class="col-md-12">
            <!-- <div class="card card-body bounce"> -->





                <center>
                    <div class="col-lg-5">
                        <div class="card card-body bg-dark">
                            <?php echo form_open_multipart('users/register'); ?>
                                <fieldset>
                                <center><legend class="font-weight-semibold"><img src="<?php echo base_url();?>assets/users/register/reg.png" alt="" witdh="50px" height="50px"><br><h1 class="text-success"><?= $title; ?></h1></legend></center>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""></label>
                                                <input type="text" class="form-control text-light" name="name"  placeholder="Enter Name" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""></label>
                                                <input type="email" class="form-control text-light" name="email"  placeholder="Enter Email" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""></label>
                                                <input type="text" class="form-control text-light" name="username"  placeholder="Enter Username" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""></label>
                                                <input type="text" class="form-control text-light" name="zip_code"  placeholder="Zip Code">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""></label>
                                                <input type="password" class="form-control text-light" name="password"  placeholder="Enter Password" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class=""></label>
                                                <input type="password" class="form-control text-light" name="password2"  placeholder="Confirm Password" required>
                                            </div>
                                        </div>



                                        <div>
                                            <input type="hidden" name="company_id" value="<?php //echo $job['company_id']; ?>">
                                            <input type="hidden" name="job_id" value="<?php //echo $job['job_id']; ?>">
                                        </div>

                                            <b class="text-danger">
                                                <?php 
                                                if (validation_errors()) : 
                                                    echo validation_errors();
                                                endif;
                                                    if (isset($error)) :  
                                                    echo $error;
                                                    endif;?>
                                                </b>
                                                <br>
                                            
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-dark" value="Sign Up"/>
                                                    </div>
                                                </div>

                                                <div class="col-lg-9">
                                                    <div class="form-group">
                                                        <P style="padding-top: 10px;" class="float-right">Already have an Account ? <a href="<?php echo base_url(); ?>users/login">Login Here</a></P>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <a class="btn btn-dark text-lowercase" href="<?php echo base_url(); ?>dashboard">I don't want to sign up</a>
                                                    </div>
                                                </div>


                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </center>

            
	        <!-- </div> -->
        </div>
    </div>
</div>







<!-- Will be called whenever Apply button in Clicked -->

  <!-- Apply Job Modal is here -->
        <?php
            // $apply = "modals/job_apply.php";
            // include($apply);
        ?>
  <!-- Apply Job Modal is here -->