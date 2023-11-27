




	<div class="col-md-12">
  		<div class="row">

          <div class="col-md-3">
            <div class="card card-body bounce bg-danger">
              <div class="media mb-3">
                <div class="media-body">
                  <h1 class="mb-0 font-weight-bold text-light"><?php echo $companies; ?></h1>
                  <span class="text-light"><?php echo "Companies" ?></span>
                </div>
                <div class="ml-3 align-self-center">
					<i class="icon-cash4 icon-2x text text-light"></i>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i>Reports</a>
                  </div>
                </div>
              </div>
              <div>
                  <div class="dropdown-divider"></div>
                  <span class="float-right"><a class="link text-light" href="<?php echo base_url(); ?>companies"><?php echo "View More" ?></a></span>
              </div>
            </div>
          </div>


		  <div class="col-md-3">
            <div class="card card-body bounce bg-dark">
              <div class="media mb-3">
                <div class="media-body">
                  <h1 class="mb-0 font-weight-bold text-primary"><?php echo $workers; ?></h1>
                  <span class="text-primary"><?php echo "Workers" ?></span>
                </div>
                <div class="ml-3 align-self-center">
					      <i class="icon-users4 icon-2x text text-primary"></i>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i>Reports</a>
                  </div>
                </div>
              </div>
              <div>
                  <div class="dropdown-divider"></div>
                  <span class="float-right"><a class="link text-primary" href="<?php echo base_url(); ?>workers"><?php echo "View More" ?></a></span>
              </div>
            </div>
          </div>


		  <div class="col-md-3">
            <div class="card card-body bounce bg-primary">
              <div class="media mb-3">
                <div class="media-body">
                  <h1 class="mb-0 font-weight-bold text-dark"><?php echo $jobs_count; ?></h1>
                  <span class="text-dark"><?php echo "Jobs Available" ?></span>
                </div>
                <div class="ml-3 align-self-center">
					<i class="icon-download7 icon-2x text text-dark"></i>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i>Reports</a>
                  </div>
                </div>
              </div>
              <div>
                  <div class="dropdown-divider"></div>
                  <span class="float-right"><a class="link text-dark" href="<?php echo base_url(); ?>jobs"><?php echo "View More" ?></a></span>
              </div>
            </div>
          </div>


		      <div class="col-md-3">
            <div class="card card-body bounce bg-warning">
              <div class="media mb-3">
                <div class="media-body">
                  <h1 class="mb-0 font-weight-bold text-light"><?php echo $categories; ?></h1>
                  <span class="text-light"><?php echo "Job Categories" ?></span>
                </div>
                <div class="ml-3 align-self-center">
					        <i class="icon-puzzle3 icon-2x text text-light"></i>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i>Reports</a>
                  </div>
                </div>
              </div>
              <div>
                  <div class="dropdown-divider"></div>
                  <span class="float-right"><a class="link text-light" href="<?php echo base_url(); ?>jobs/categories"><?php echo "View More" ?></a></span>
              </div>
            </div>
          </div>


		</div>
	</div>


         


<!-- <div class="col-md-4">
	<div class="card">
		<div class="card-header header-elements-inline">
		<h6 class="card-title">Top Stats</h6>
		</div>
		<div class="card-body">
			<ul class="list-unstyled mb-0">
				<?php //foreach ($statData as $row): ?>
				<li class="mb-3">
					<div class="d-flex align-items-center mb-1">
						<?php //echo $row['title']; ?>
						<span class="text-muted ml-auto"><?php //echo $row['value']; ?></span></div>
				<div class="progress" style="height: 0.375rem;">
					<div class="progress-bar bg-teal" style="width: 50%">
					<span class="sr-only"><?php //echo $row['value']; ?></span>
					</div>
				</div>
				</li>
				<?php //endforeach; ?>
			</ul>
		</div>
	</div>
</div> -->


<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
        <div class="card card-body bounce">

				<?php 

          if(empty($jobs->result())){

            echo '<center><img src="'.base_url().'assets/images/empty_logo.png" width="60px"><h3> No Jobs Posted Yet !</h3></center>';

          }?>
        
        <?php foreach($jobs->result() as $job):?>
					<!-- Slideshow container -->
				<div class="slideshow-container col-lg-12" style="width: 100%;">
					<!-- Full-width images with number and caption text -->
					<div class="mySlides fade">
                <div class="media mb-3">
                  <div class="media-body">
                    <div class="ml-3 align-self-center">
                      <img src="<?php echo base_url();?>assets/images/img/company_images/<?php echo $job->company_logo; ?>" width="150px" height="150px" alt="">
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i>Reports</a>
                      </div>
                    </div>
                    <h1 class="mb-0 font-weight-bold text-warning"><?php echo $job->company_name; ?></h1><br>
                      <h6 class="text-warning">Job Title: <span class="text-success">&nbsp<?php echo $job->title_1; ?></span></h6>
                    <span class="text-muted"><?php echo $job->job_description; ?></span>
                    <div class="dropdown-divider"></div>
                      <h6 class="text-warning">Contacts</h6>
                    <span class="text-muted"><?php echo $job->company_phones ."<br>". $job->company_emails; ?></span>
                  </div>
                </div>
                <div>
                    <div class="dropdown-divider"></div>
                    <span class="float-right"><a class="link text-warning link-disabled" href="<?php echo site_url('/jobs/job_view/').$job->job_id; ?>"><?php echo "View More" ?></a></span>
                </div>
              </div>

					<!-- Next and previous buttons -->
        </div>
			<?php endforeach; ?>
        </div>
	</div>
</div>
          

