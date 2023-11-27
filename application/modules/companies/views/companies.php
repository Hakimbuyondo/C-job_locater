


		
<!-- <div class="col-md-12 card card-body">
  <fieldset>
            <legend class="font-weight-semibold"><i class="icon-folder-search mr-2"></i><?=$this->lang->line('search_filter');?></legend>

    <div class="form-group row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-md-3">
            <input type="text" placeholder="First name" class="form-control">
          </div>

          <div class="col-md-3">
            <input type="text" placeholder="Last name" class="form-control">
          </div>
          <div class="col-md-3">
            <select data-placeholder="Select your country" class="form-control form-control-select2">
                <option value="0">Credit Worthy</option>  
                <option value="1">Suspect</option> 
            </select>
          </div>
          <div class="col-md-3"> 
            <button type="submit" class="btn btn-dark btn-block btn-sm">Apply Filter</button>
          </div>
        </div>
      </div>
    </div>

  </fieldset>
</div> -->

		<div class="card card-body padding-0">
	        	<table class="table table-bordered table-striped">
	        		<thead class="bg-dark">
	        				<th>Image</th>
	        				<th>Name</th>
	        				<th>Address</th>
	        				<th>Phone Contact</th>
	        				<th>Email Address</th>
	        				<th>Options</th>
	        		</thead>
	        		<tbody>

	        			<?php 			
	        				if(empty($companies)){

								echo '<tr><td colspan="5" class="text-center">
									  <img src="'.base_url().'assets/images/empty_logo.png" width="60px"><h3>There is no data in this table !</h3></td></tr>';
							}
				        	//echo Modules::run('utility/emptyRow','No employees yet');
	        			?>
                  <?php foreach($companies as $company): ?>
	        			<tr>
	        				<td><img src="<?php echo base_url();  ?>assets/images/img/company_images/<?php echo $company['company_logo']; ?>" alt="" width="30px" height="30px"></td>
	        				<td><?php echo $company['company_name']; ?></td>
	        				<td><?php echo $company['company_address']; ?></td>
	        				<td><?php echo $company['company_phones']; ?></td>
	        				<td><?php echo $company['company_emails']; ?></td>
	        				<td class="text-center">
	        					<i class="icon-menu text-dark" data-toggle="dropdown"></i>

								<?php if($this->session->userdata('user_id') == $company['user_id']): ?>
					        	  <div class="dropdown-menu dropdown-menu-right">
				                    <a href="companies/edit/<?php echo $company['company_id']; ?>" class="dropdown-item">
				                    	<i class="icon-pencil"></i><?php echo "Edit"; ?></a>
				                    	
				                    	<div class="dropdown-divider"></div>
										<?php echo form_open('companies/delete/'.$company['company_id']);?>
				                      	<button class="dropdown-item text-danger" data-toggle="modal">
				                    		<i class="icon-bin"></i><?php echo "Delete"; ?>
										</button>
				  						</form>
								</div>
								<?php endif; ?>

								<?php if($this->session->userdata('user_id') != $company['user_id']): ?>
					        	  <div class="dropdown-menu dropdown-menu-right">
				                    <p class="dropdown-item"><?php echo "This is not your Company !"; ?></a>
								</div>
								<?php endif; ?>
				                  

				                  <?php //include('delete_modal.php'); ?>

	        				</td>
	        			</tr>
	        			<?php endforeach; ?>
	        			<?php //endforeach; ?>
	        		</tbody>
	        	</table>
	      </div>