









<div class="card card-body">
    <?php echo form_open_multipart('workers/register'); ?>
        <fieldset>
        <legend class="font-weight-semibold"><i class="icon-users mr-2"></i><?=$title;?></legend>
            <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="file" name="userfile" id="photo" style="display: none;">
                            <div class="col-sm-12">
                                <center>
                                    <img class="img img-thumbnail" src="<?php echo base_url(); ?>assets/images/img/workers_images/avatar.png" width="200px" onclick="$('#photo').click()">
                                </center>
                            
                            </div>
                            <div class="col-sm-12">
                                <center>
                                    <p class="text-success"><?php echo "Upload Your Image"; ?></p>
                                    <small>note: image or logo name should contain no space !!!</small>
                                </center>
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div class="col-lg-12">
                        <center>
                            <h5 class="sub-title text-success">Personal Info</h5>
                        </center>
                        <hr>
                    </div>
                    
            <!-- Company Information -->
                <div class="col-sm-6">

                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Your Name: </label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter Your Name">
                    </div>


                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Your Age: </label>
                        <input type="number" min="15" max="10000" class="form-control" name="age"  placeholder="Enter Your Age">
                    </div>

                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Select Your Gender: </label>
                        <select class="form-control" name="gender"  placeholder="Gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select> 
                    </div>
                    
                </div>








            <!-- Contact Info -->
            <div class="col-sm-6">

                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Personal Contacts: </label>
                        <input type="text" class="form-control" name="contacts" placeholder="Personal Contacts">
                    </div>

                    <div class="form-group">
                        <label class=""><span class="text-success">*</span> Personal Description: </label>
                        <textarea rows="2" placeholder="Personal Destription" cols="50" name="description"  class="form-control"></textarea>
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
                        <input style="margin-left: 50%;" type="submit" class="btn btn-dark pull-right" name="submit_employer" value="SUBMIT INFO" />
                    </div>

                </div>
            </div>
            </fieldset>
        </form>
</div>
	       