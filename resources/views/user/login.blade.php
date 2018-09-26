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
								<legend>Sign in</legend>
								<div class="form-group">
									<div class="col-xl-10">
	                                	<button type="button" class="btn btn-lg btn-block btn-primary">
	                                		<i class="icon-facebook-f"></i> Login with Facebook
	                                	</button>
	                            	</div>
                            	</div>
								<div class="form-group">
	                                <div class="col-xl-10">
	                                    <input class="form-control" id="txtEmail" placeholder="Email" type="text">
	                                </div>
                            	</div>
                            	<div class="form-group">
	                                <div class="col-xl-10">
	                                    <input class="form-control" id="txtPassword" placeholder="Password" type="password">
	                                </div>
                            	</div>
                            	<div class="form-group">
                            		<div class="col-xl-10">
                            			<a href="{{route('forgot')}}">Forgot your password?</a>
                            		</div>
                            	</div>
                            	<div class="form-group">
	                                <div class="col-xl-10">
	                                    <button type="button" class="btn btn-success btn-lg btn-block">Log in</button>
	                                </div>
                            	</div>
                            	<div class="form-group">
                            		<div class="col-xl-10">
                            			<a href="{{route('signup')}}">New to Confraise, <b>Sign Up!</b></a>
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