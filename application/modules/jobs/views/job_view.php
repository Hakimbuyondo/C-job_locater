
<?php //foreach($j)?>


<div class="col-md-12">
    <div class="row">
		<div class="col-md-12">

            <div class="card card-body bounce">
                <div class="media mb-3">
                    <div class="media-body">
                        <div class="ml-3 align-self-center">

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                                <center>
                                                    <img class="img img-thumbnail" src="<?php echo base_url(); ?>assets/images/img/company_images/<?php echo $job['company_logo']; ?>" width="200px" onclick="$('#photo').click()">
                                                    <h1 class="mb-0 font-weight-bold text-warning"><?php echo $job['company_name']; ?></h1>
                                                </center>
                                            <div class="dropdown-divider bg-warning"></div>
                                        </div>
                                    </div>
                                </div>


                            <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-switch2"></i>Reports</a>
                        </div>
                    </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="text-warning">Job Title: <span class="text-success">&nbsp<?php echo $job['title_1']; ?></span></h6>
                                <span class="text-muted"><?php echo $job['job_description']; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <h6 style="padding-right: 30px;" class="text-warning float-right">Date Posted: <small class="text-success">&nbsp<?php echo $job['date_posted']; ?></small></h6>
                            </div>
                            <br>
                        </div>

                        
                        <div class="dropdown-divider"></div>
                        <h6 class="text-warning">Contacts</h6>
                        <span class="text-muted"><?php echo $job['company_phones'] ."<br>". $job['company_emails']; ?></span>
                        <div class="dropdown-divider"></div>
                        <h6 class="text-warning">Company Address</h6>
                        <span class="text-muted"><?php echo $job['company_address']; ?></span>
                </div>
            </div>
            <div>
                <div class="dropdown-divider"></div>
                <!-- <button class="btn btn-dark float-right" data-toggle="modal" data-target="#applyModal">APPLY NOW</button> -->
            </div>





<div class="card card-body bg-dark">
    <?php echo form_open_multipart('jobs/apply'); ?>
        <fieldset>
        <center><legend class="font-weight-semibold"><i class="icon-users mr-2"></i><?php echo "APPLY FOR THE JOB"; ?></legend></center>

            <div class="row" id="application_form">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Attach file / CV: <small>Your file must be an image or PDF</small></label>
                        <input type="file" class="form-control text-light" name="userfile"  placeholder="Upload Your CV" required>
                    </div>
                </div>

                <div>
                    <input type="hidden" name="company_id" value="<?php echo $job['company_id']; ?>">
                    <input type="hidden" name="job_id" value="<?php echo $job['job_id']; ?>">
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Select Your Name: </label>
                        <select class="form-control" name="worker_id" required>
                            <option></option>
                            <?php foreach($workers->result() as $worker): ?>
                            <option value="<?php echo $worker->worker_id; ?>"><?php echo $worker->name; ?></option>
                            <?php endforeach; ?>
                        </select> 
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Message: </label>
                        <textarea rows="2" cols="50" name="message"  class="form-control text-light" required></textarea>
                    </div>

                    <b style="color: red;">
                        <?php 
                        if (validation_errors()) : 
                            echo validation_errors();
                        endif;
                            if (isset($error)) :  
                            echo $error;
                            endif;?>
                        </b>
                        <br>

                    <div class="form-group">
                        <input style="margin-left: 50%;" type="submit" class="btn btn-dark float-right" value="Apply"/>
                    </div>

                </div>
            </div>
        </fieldset>
    </form>


        </div>
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