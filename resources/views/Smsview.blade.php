

@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header"> View Sms</div>

					<div class="card-body">
						
<table class="table table-bordered table-hover">
	<thead class="table-dark">
	<th>Sms Id</th>
	<th>Phone</th>
	<th>Sms</th>
	
	<th></th>
	</thead>
	<tbody>
	@foreach($sm as $sms)
		<tr>
			<td>{{$sms->id}}</td>
			<td>{{$sms->phone}}</td>
			<td>{{$sms->sms}}</td>
			
	
		</tr>
		@endforeach
	</tbody>
</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
