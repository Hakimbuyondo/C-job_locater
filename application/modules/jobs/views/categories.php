












<div class="card card-body padding-0">
	        	<table class="table table-bordered table-striped">
	        		<thead class="bg-dark">
	        				<th>Category Name</th>
	        				<th>Date Created</th>
	        		</thead>
	        		<tbody>

	        			<?php 			
	        				if(empty($categories->result())){

								echo '<tr><td colspan="6" class="text-center">
									  <img src="'.base_url().'assets/images/empty_logo.png" width="60px"><h3>There is no any Category in here !</h3></td></tr>';
							}
				        	//echo Modules::run('utility/emptyRow','No employees yet');
	        			?>

                        <?php foreach($categories->result() as $category): ?>
	        			<tr>
	        				<td><?php echo $category->category_name; ?></td>
	        				<td><?php echo $category->date_created; ?></td>
	        			</tr>
	        			<?php endforeach; ?>

	        		</tbody>
	        </table>
	    </div>