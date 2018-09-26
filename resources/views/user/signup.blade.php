@extends("layout.master")
@section("pageSections")
	<section class="hero-header text-white" style="background: url('assets/img/demo/team.jpg')">
		<div class="content-wrapper">
			<div class="container">
			</div>
		</div>
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-6">
						<form class="">
							<fieldset>
								<legend>Sign up page</legend>
								<div class="form-group">
									<div class="col-xl-10">
	                                	<button type="button" class="btn btn-lg btn-block btn-primary">
	                                		<i class="icon-facebook-f"></i> Login with Facebook
	                                	</button>
	                            	</div>
                            	</div>
                            	<div class="form-group">
                            		<label class="form-control" for="prueba">Probando bitch</label>
                            	</div>
								<div class="form-group" id="prueba">
									<div class="col-xl-10">
										<input class="form-control" type="text" id="txtFirstName" placeholder="First Name">
										<input class="form-control" type="text" id="txtLastName" placeholder="Last Name">
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop