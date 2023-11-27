<!-- Will be called whenever Apply button in Clicked -->

<!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-warning" id="exampleModalLongTitle"><?php echo $job['title_1']; ?></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


              <p class="link text-success">Are you sure you want to Apply for this job ?</p>

            <?php echo form_open('jobs/job_apply'); ?>
  
            <input type="hidden" name="company_id" value="<?php echo $job['company_id']; ?>">
            <input type="hidden" name="job_id" value="<?php echo $job['job_id']; ?>">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="form-group">
                            <label class=""><span class="text-success">*</span> Attach File : CV <small>File should be of type PDF !</small></label>
                            <input type="file" class="form-control" name="userfile">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                      <label class=""><span class="text-success">*</span> Select Your Name: </label>  
                          <select class="form-control" name="worker_id"  placeholder="Select a Job Title">
                              <option></option>
                              <?php foreach($workers->result() as $worker): ?>
                              <option value="<?php echo $worker->worker_id; ?>"><?php echo $worker->name; ?></option>
                              <?php endforeach; ?>
                          </select> 
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-success">Yes</button>
          </form>
        </div>
      </div>
    </div>
</div>
<!-- modals ppup  -->