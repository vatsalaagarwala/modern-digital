@extends('app')
@section('content')
<section id="blog-title" class="page-title">
	<div class="row">	 		
		<div class="container">
			<div class="section-title wow fadeInDown">			
				<h1 style="padding-top:100px"><span>SIGN UP</span></h1>							
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
                            <h3>Enter Details</h3>
                            {!! Form::open(array('url' => 'signup','class'=>'','id'=>'signup','role'=>'form')) !!} 
							<form class="reply" id="reply">
								<fieldset>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<input class="form-control" name="firstname" placeholder="First Name" type="text" value="" required>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<input class="form-control" name="lastname" placeholder="Last Name" type="text" value="" required>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<input class="form-control" name="email" placeholder="Your E-MAIL Please" type="text" value="" required>
										</div>
										
									</div>
									<div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<input class="form-control" name="contact_number" placeholder="Contact Number" type="number" value="" required>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        
                        
                                            <input class="form-control" name="password" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">    
                                           
                                            <input class="form-control" name="passwordconfirm" id="loginPassword2" placeholder="Confirm Password" type="password" required data-msg="Please enter your password">
                                            
                                        </div>
                                        
                                            <label for="" class="form-label mb-4 mr-2">Signup As:</label>
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
                                        
                                            
									</div>
								</fieldset>
								<button class="btn" type="submit">Submit</button>
                            </form>
                            {!! Form::close() !!} 
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