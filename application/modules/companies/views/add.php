


<div class="card card-body">
    <?php echo form_open_multipart('companies/add'); ?>
        <fieldset>
        <legend class="font-weight-semibold"><i class="icon-users mr-2"></i><?=$title;?></legend>
            <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="file" name="userfile" id="photo" style="display: none;">
                            <div class="col-sm-12">
                                <center>
                                    <img class="img img-thumbnail" src="<?php echo base_url(); ?>assets/images/img/company_images/logo.png" width="200px" onclick="$('#photo').click()">
                                </center>
                            
                            </div>
                            <div class="col-sm-12">
                                <center>
                                    <p><?php echo "Upload Company Logo"; ?></p>
                                    <small>note: image or logo name should contain no space !!!</small>
                                </center>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="col-lg-12">
                        <center>
                            <h5 class="sub-title text-primary">Company Info</h5>
                        </center>
                        <hr>
                    </div>
                    
            <!-- Company Information -->
                <div class="col-sm-6">

                    <div class="form-group">
                        <label class=""><span class="text-primary">*</span> Company Name:</label>
                        <input type="text" class="form-control" name="company_name"  placeholder="Company Name">
                    </div>


                    <div class="form-group">
                        <label class=""><span class="text-primary">*</span> Number Of Employees</label>
                        <input type="number" min="1" max="10000" class="form-control" name="number_of_employees"  placeholder="Number Ob Employees">
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
                        <label class=""><span class="text-primary">*</span> Company Address: </label>
                        <input type="text" class="form-control" name="company_address"  placeholder="Company Address">
                    </div>


                    <div class="form-group">
                        <label class=""><span class="text-primary">*</span> Company Contacts / Phones: </label>
                        <input type="text" class="form-control" name="company_contacts"  placeholder="Company Contacts">
                    </div>
                    
                </div>








            <!-- Contact Info -->
            <div class="col-sm-6">

                    <div class="form-group">
                        <label class=""><span class="text-primary">*</span> Company Emails: </label>
                        <input type="email" class="form-control" name="company_emails" placeholder="Company Emails">
                    </div>

                    <div class="form-group">
                        <label class=""><span class="text-primary">*</span> Company Description: </label>
                        <textarea rows="2" placeholder="Company Description" cols="50" name="company_description"  class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label class=""><span class="text-primary">*</span> Company Websites </label>
                        <input type="text" class="form-control" name="company_websites" placeholder="Company Websites">
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
                        <input style="margin-left: 50%;" type="submit" class="btn btn-dark pull-right" name="submit_employer" value="ADD COMPANY" />
                    </div>

                </div>
            </div>
            </fieldset>
        </form>
</div>
	       