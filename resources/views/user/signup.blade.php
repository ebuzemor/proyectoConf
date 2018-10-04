@extends("layout.master")
@section("css")
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
	<style>
		.i 
	</style>
@stop
@section("pageSections")
	<section class="hero-header" style="background: url('assets/img/demo/team.jpg')">
		<div class="content-wrapper">
			<div class="container">
			</div>
		</div>
		<div class="content-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-6">
						{!!Form::open(['route'=>'register'])!!}	
							<fieldset>
								<legend class="text-white">Sign up page</legend>
								<div class="form-group">
									<div class="col-xl-10">
	                                	<button type="button" class="btn btn-lg btn-block btn-primary">
	                                		<i class="icon-facebook-f"></i> Login with Facebook
	                                	</button>
	                            	</div>
                            	</div>
                            	<div class="form-group">
                            		<span class="help-block text-white">
                            			Or sign up with your e-mail
                                    </span>
                            	</div>
								<div class="form-group has-icon col-xl-10">
									<i class="icon-envelope-o"></i>
									<input class="form-control {{ $errors->has('email') ? ' is-invalid' : ''}}" 
									type="text" id="email" name="email" value="{{old('email')}}" placeholder="Enter your email" required>
									@if ($errors->has('email'))
										<span class="invalid-feedback">
											<strong>{{ $errors->first('email')}}</strong>
										</span>
									@endif
								</div>
								<div class="form-group has-icon col-xl-10">
									<i class="icon-user-secret"></i>
									<input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" 
									type="password" id="password" name="password" placeholder="Enter your password" required>
									@if ($errors->has('password'))
										<span class="invalid-feedback">
											<strong>{{$errors->first('password')}}</strong>
										</span>
									@endif
								</div>
								<div class="form-group has-icon col-xl-10"><i class="icon-repeat"></i>
									<input class="form-control" type="password" id="password_confrm" name="password_confirm" 
									placeholder="Confirm your password" required>
								</div>
								<div class="form-group">
                            		<div class="col-xl-10">
                            			<button class="btn btn-danger btn-lg btn-block" type="submit">Sign Up</button>
                            		</div>
                            	</div>
							</fieldset>
						{!!Form::close()!!}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>-->
@stop