@extends('layout')
@section('content')
<section id="register-candidate" class="register-candidate" style="background-image: url(images/employer_back.jpg);">
	<form method="POST" action="{{ route('employer-register') }}">
		@csrf
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 container-register">
					<div class="row">
						<div class="col-12">
							@if ($errors->any())
							    <div class="alert alert-danger">
							            @foreach ($errors->all() as $error)
							                {{ $error }}
							            @endforeach
							    </div>
							@endif
						</div>
						<div class="col-12">
							<h1>Registration Candidate</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
						</div>
						<div class="col-12">
							<label for="name">Name <span>*</span></label>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="first_name" placeholder="Fisrt name" required>
							</div>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control" name="last_name" placeholder="Last name" required>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <label for="email">Email <span>*</span></label>
							    <input type="email" class="form-control" id="email" name="email">
							</div>                           
						</div>  
						<div class="col-md-6">
							<div class="form-group">
							    <label for="phone">Phone <span>*</span></label>
							    <input type="text" class="form-control" id="phone" name="phone">
							</div>                           
						</div>       
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="linkedin" class="linkedin_label"><img src="{{url('/images/linkedin-logo.png')}}" alt="">Your Profile <span>*</span></label>
							    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Place your direct LinkedIn profile link here">
							</div>                           
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="company_name">Company Name <span>*</span></label>
							    <input type="text" class="form-control" id="company_name" name="company_name">
							</div>                           
						</div>   
						<div class="col-md-6">
							<div class="form-group">
							    <label for="company_website">Company Website <span>*</span></label>
							    <input type="text" class="form-control" id="company_website" name="company_website">
							</div>                           
						</div>   
						<div class="col-12">
							<div class="form-group">
							    <label for="experience">Give us preliminary insight on how Zig-Works can help you and your company</label>
							    <textarea class="form-control" id="experience" name="experience" rows="3" placeholder="Give us preliminary insight on how Zig-Works can help you and your company. Share whatever is that you would like to see in regards to talent"></textarea>
							</div>                     
						</div>
						<div class="col-12">
							<label class="label-check">I accept Terms, Policies, and Privacy Policy*
							  <input type="checkbox" name="terms" required>
							  <span class="checkmark"></span>
							</label>                       
						</div>
						<div class="col-12 text-center">
							<input type="submit" value="Send" class="btn btn-send">
						</div>
					</div>
				</div>                   
			</div>
		</div>
	</form> 
</section>
@endsection