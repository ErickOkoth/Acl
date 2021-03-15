

@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header bg-primary"><h3>Send Complaints <strong>OR</strong> Reply to complaints</h3></div>

					<div class="card-body">
						
						<form method="post" action="{{route('postsms')}}">
							@csrf
							<div class="form-group">
								<label for="email">Phone:</label>
								<input type="number" class="form-control" id="name" name="phone" placeholder="enter phone number" required>
							</div>

							
							<div class="form-group">
								<label for="pwd">SMS</label>
								<textarea type="text" class="form-control" id="complaints" name="sms" placeholder="give your descriptions and ensure to give your working phone number here" required></textarea>
							</div>
						
						
                            <div class="form-group form-check">
                     <label class="form-check-label">
                     <input class="form-check-input" type="checkbox"> Remember me
                   </label>
                   </div>
							<button type="submit" class="btn btn-primary btn-lg">Send SMS</button>
							
						</form>
						<br>
						<a href="{{ route('home') }}"><button class="btn btn-danger btn-lg btn-close">Cancel</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
