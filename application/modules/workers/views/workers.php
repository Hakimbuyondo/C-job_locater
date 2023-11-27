
<div class="card card-body padding-0">
	        	<table class="table table-bordered table-striped">
	        		<thead class="bg-dark">
	        				<th>Image</th>
	        				<th>Name</th>
	        				<th>Age</th>
	        				<th>Description</th>
	        				<th>Contacts</th>
	        				<th>Options</th>
	        		</thead>
	        		<tbody>

	        			<?php 			
	        				if(empty($workers->result())){

								echo '<tr><td colspan="6" class="text-center">
									  <img src="'.base_url().'assets/images/empty_logo.png" width="60px"><h3>Workers List Is Empty Now !</h3></td></tr>';
							}
				        	//echo Modules::run('utility/emptyRow','No employees yet');
	        			?>
                  <?php foreach($workers->result() as $worker): ?>
	        			<tr>
	        				<td><img src="<?php echo base_url();  ?>assets/images/img/workers_images/<?php echo $worker->image; ?>" alt="" width="50px" height="50px"></td>
	        				<td><?php echo $worker->name; ?></td>
	        				<td><?php echo $worker->age; ?></td>
	        				<td><?php echo $worker->description; ?></td>
	        				<td><?php echo $worker->contacts; ?></td>
	        				<td class="text-center">
	        					<i class="icon-menu text-dark" data-toggle="dropdown"></i>

					        	  <div class="dropdown-menu dropdown-menu-right">
					       
				                    <a href="<?php echo base_url(); ?>workers/edit/<?php $worker->worker_id; ?>" class="dropdown-item">
									<i class="icon-statistics mr-2"></i><?php echo "View Profile"; ?></a>

									<?php if($this->session->userdata('user_id') == $worker->user_id): ?>
				                    	<a data-toggle="modal" data-target="#applyModal" href="" class="dropdown-item">
										<i class="icon-clipboard5 text-success"></i><?php echo "Update Info"; ?></a>
				                    	
				                    	<div class="dropdown-divider"></div>
										<?php echo form_open('workers/delete/'.$worker->worker_id);?>
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