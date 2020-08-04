@extends('app')
@section('content')
<section id="blog-title" class="page-title">
	<div class="row">	 		
		<div class="container">
			<div class="section-title wow fadeInDown">			
				<h1 style="padding-top:100px"><span>SIGN IN</span></h1>							
			</div>				
			<!-- <h1 class="wow fadeInUp">Last Events from Our Blog</h1> -->
		</div>
			</div>
</section>


<section id="blog-block" class="blog single-post">
<!-- Main Content start-->
<div class="container">
			<div class="row">
				
				

						<!-- Reply Section Start -->	
						<div class="leave-reply">
                           
							{!! Form::open(array('url' => 'signin','class'=>'','id'=>'signup','role'=>'form')) !!} 

							<form class="form-validate">
							<div class="form-group">
								<label for="loginUsername" class="form-label"> UserName</label>
								<input name="email" id="loginUsername" type="email" placeholder="name@address.com" autocomplete="off" required data-msg="Please enter your email" class="form-control">
							</div>
							<div class="form-group">
								<label for="loginPassword" class="form-label"> Password</label>
								<input name="password" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control">
							</div>
							<label for="" class="form-label mb-4 mr-2">Signin As:</label>
                                            <div class="form-check-inline mb-4">
                                            <div class="radio-item">
                                            <input type="radio" id="ritema" name="usertype" value="Admin" required>
                                            <label for="ritema">Admin</label>
                                            </div>

                                            <div class="radio-item">
                                            <input type="radio" id="ritemb" name="usertype" value="Employee" required>
                                            <label for="ritemb">Employee</label>
                                            </div>
                                            </div>

							<button name="submit" type="submit" class="btn btn-lg btn-block btn-primary">Sign In</button>
							<!-- <button id="submit" name="submit" class="btn tp-btn-primary tp-btn-lg">Sign In</button> -->
							<hr data-content="OR" class="my-3 hr-text letter-spacing-2">
							<button type="submit" class="btn btn-lg btn-block btn-warning" onclick="window.location.href='/signup'">Sign Up</button>
							<!-- <button class="btn btn btn-outline-primary btn-block btn-social mb-3 bg-primary"><i class="fa-2x fa-facebook-f fab btn-social-icon"> </i>Login <span class="d-none d-sm-inline">with Facebook</span></button>
							<button class="btn btn btn-outline-muted btn-block btn-social mb-3"><i class="fa-2x fa-google fab btn-social-icon"> </i>Login <span class="d-none d-sm-inline">with Google</span></button> -->
							<hr class="my-4">
							<p class="text-sm text-muted">By signing up you agree to Modern Digital's <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>.</p>
							</form>
						</div>
						<!-- /Reply Section -->
						<br>
						<br>
						<br>
						<br>
						<br>
				  </article>
				</div>
				
			</div>
		</div>
</section>

@endsection