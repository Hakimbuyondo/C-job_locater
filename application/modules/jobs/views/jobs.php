
<!-- <div class="col-md-12 card card-body">
  <fieldset>
        <legend class="font-weight-semibold"><i class="icon-folder-search mr-2"></i><?=$this->lang->line('search_filter');?></legend>

    <div class="form-group row">
      <div class="col-lg-12">

	  	<?php echo form_open(); ?>
        <div class="row">
          <div class="col-md-9">
            <input type="text" placeholder="Search a Job" class="form-control">
          </div>
          <div class="col-md-3"> 
            <button type="submit" class="btn btn-dark btn-block btn-sm">Apply Filter</button>
          </div>
        </div>
		</form>

      </div>
    </div>

  </fieldset>
</div> -->






<div class="card card-body padding-0">
	        	<table class="table table-bordered table-striped">
	        		<thead class="bg-dark">
	        				<th>Job Title</th>
	        				<th>Job Description</th>
	        				<th>Job Category</th>
	        				<th>Company Name</th>
	        				<th>Date Posted</th>
	        				<th>Options</th>
	        		</thead>
	        		<tbody>

	        			<?php 			
	        				if(empty($jobs->result())){

								echo '<tr><td colspan="6" class="text-center">
									  <img src="'.base_url().'assets/images/empty_logo.png" width="60px"><h3>There is no data in this table !</h3></td></tr>';
							}
				        	//echo Modules::run('utility/emptyRow','No employees yet');
	        			?>
                  <?php foreach($jobs->result() as $job): ?>
	        			<tr>
	        				<td><?php echo $job->title_1; ?></td>
	        				<td><?php echo word_limiter($job->job_description, 10); ?></td>
	        				<td><?php echo $job->category_name; ?></td>
	        				<td><?php echo $job->company_name; ?></td>
	        				<td><?php echo $job->date_posted; ?></td>
	        				<td class="text-center">
	        					<i class="icon-menu text-dark" data-toggle="dropdown"></i>
					        	  <div class="dropdown-menu dropdown-menu-right">
					       
				                    <a href="<?php echo site_url('/jobs/job_view/'.$job->job_id); ?>" class="dropdown-item">
									<i class="icon-statistics mr-2"></i><?php echo "View More" ?></a>

				                    <!-- <a data-toggle="modal" data-target="#applyModal" href="" class="dropdown-item">
									<i class="icon-clipboard5 text-success"></i><?php echo "Apply"; ?></a> -->
									<?php if($this->session->userdata('user_id') == $job->user_id): ?>
				                    	<div class="dropdown-divider"></div>
										
										<?php echo form_open('jobs/delete/'.$job->job_id);?>
				                      	<button class="dropdown-item text-danger" data-toggle="modal">
				                    		<i class="icon-bin"></i><?php echo "Delete"; ?>
										</button>
				  						</form>
										<?php endif; ?>
				                  </div>

				                  <?php //include('delete_modal.php'); ?>

	        				</td>
	        			</tr>
	        			<?php endforeach; ?>
	        			<?php //endforeach; ?>
	        		</tbody>
	        </table>
	    </div>