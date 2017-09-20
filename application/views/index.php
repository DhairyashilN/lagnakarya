<?php $this->load->view('includes/header');?>
<!-- Slider Section -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img src="assets/img/wed_bg1.jpg" alt="...">
		</div>
		<div class="item">
			<img src="assets/img/wed_bg2.jpg" alt="...">
		</div>
	</div>
	<!-- Controls -->
	<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a> -->
</div>
<!-- End Slider Section -->
<!-- Home Search Section -->
<section class="home-search">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">	
				<div class="panel panel_custom panel-default waves-effect">
					<div class="panel-body">
						<form class="form-horizontal">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="femail" class="col-sm-6 control-label">I am looking for :</label>
										<div class="col-sm-6">
											<select class="form-control">
												<option value="">Select Gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
											</select>
										</div>
									</div>
								</div> 
								<div class="col-sm-6">
									<div class="form-group">
										<label for="femail" class="col-sm-6 control-label">Located In :</label>
										<div class="col-sm-6">
											<select class="form-control">
												<option value="">Select City</option>
												<option value="">Nashik</option>
												<option value="">Pune</option>
												<option value="">Mumbai</option>
												<option value="">Kolhapur</option>
											</select>
										</div>
									</div>
								</div> 
								<div class="col-sm-6">
									<div class="form-group">
										<label for="fpass" class="col-sm-6 control-label">Sub-Cast<span class="requireido">*</span>:</label>
										<div class="col-sm-6">
											<select class="form-control">
												<option value="">Select Interest</option>
												<option value="Sports &amp; Adventure">Patil</option>
												<option value="Movies &amp; Entertainment">Deshmukh</option>
												<option value="Arts &amp; Science">Inamdar</option>
												<option value="Technology">96 kuli</option>
												<option value="Fashion">Maratha</option>
											</select>
										</div>
									</div>
								</div> 
								<div class="col-sm-6">
									<div class="form-group">
										<label for="fpass" class="col-sm-6 control-label">Age <span class="requireido">*</span>:</label>
										<div class="col-sm-3">
											<input type="text" placeholder="From" class="form-control">
										</div><div class="col-sm-3">
											<input type="text" placeholder="To" class="form-control">
										</div>
									</div>
								</div> 
								<div class="col-sm-6">
									<div class="form-group">
										<label for="fpass" class="col-sm-6 control-label">Status <span class="requireido">*</span>:</label>
										<div class="col-sm-6">
											<select class="form-control">
												<option value="">Select Status</option>
												<option value="Single">Single</option>
												<option value="Married">Married</option>
												<option value="In a Relationship">In a Relationship</option>
												<option value="It's Complicated">It's Complicated</option>
											</select>
										</div>
									</div>
								</div> 
								<div class="col-sm-6 text-center">
									<div class="form-group">
										<button type="submit" class="btn btn-yellow">Find Matches</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Home Search Section -->
<!-- Home Reg. Steps Section -->
<section class="regi-steps">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="headings">How we Work</h3>
				<hr width="20%" style="border-width:2px;border-color:#0e3844; ">
			</div>
		</div>
		<div class="row step-details">
			<div class="col-lg-4">
				<div class="step-box">
					<h4><i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i></h4>
					<h3>Step 1</h3><br/>
					<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="step-box">
					<h4><i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i></h4>
					<h3>Step 2</h3><br/>
					<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="step-box">
					<h4><i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i></h4>
					<h3>Step 3</h3><br/>
					<p class="lead">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Home Reg. Steps Section -->
<?php $this->load->view('includes/footer');?>
