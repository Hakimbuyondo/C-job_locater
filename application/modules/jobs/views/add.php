







<div class="card card-body">
    <?php echo form_open_multipart('jobs/add'); ?>
        <fieldset>
        <legend class="font-weight-semibold"><i class="icon-users mr-2"></i><?=$title;?></legend>


                    <div class="row">

                            <div class="col-lg-12">
                                <center>
                                    <h4 class="sub-title text-success">Post your Job</h4>
                                    <p class="sub-title text-danger">Select a Job title bellow !</p>
                                </center>
                                <hr>
                            </div>


                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class=""><span class="text-success">*</span> Select Job Title Here: </label>
                                
                                <select class="form-control" name="holder1"  placeholder="Select a Job Title">
                                    <option></option>
                                    <?php foreach($jobs_holder1->result() as $holder1): ?>
                                    <option value="<?php echo $holder1->holder1_id; ?>"><?php echo $holder1->title_1; ?></option>
                                    <?php endforeach; ?>
                                </select> 
                            </div>
                        </div>
                    </div>



            <div class="row">

                <div class="col-lg-12">

                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Select Company Name: </label>

                        <select class="form-control" name="company_id"  placeholder="Select your Company Name">
                            <option></option>
                            
                            <?php foreach($company_list->result() as $company): ?>
                                <?php if($this->session->userdata('user_id') == $company->user_id): ?>
                            <option value="<?php echo $company->company_id; ?>"><?php echo $company->company_name; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            
                        </select> 
                    </div>

                    <!-- <div class="form-group">
                        <label class="">
                        Company Size:
                        </label>
                        <select class="form-control" name="company_size"  placeholder="Company size">
                            <option>1-5 Employees</option>
                            <option>6-20 Employees</option>
                            <option>20-50 Employees</option>
                            <option>50-100 Employees</option>
                            <option>More than 100 Employees</option>
                            <option>Multinational</option>
                        </select> 
                    </div> -->

                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Job Description / Requirements to apply: </label>
                        <textarea rows="2" placeholder="Job Description and Requirements to apply:" cols="50" name="job_description"  class="form-control"></textarea>
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
                        <input style="margin-left: 50%;" type="submit" class="btn btn-dark float-right" value="Post Job"/>
                        <p>If your company name is not listed please register your company <a href="<?php echo base_url(); ?>companies/add">Here</a></p>
                    </div>

                </div>
            </div>
            </fieldset>
        </form>
</div>
	       