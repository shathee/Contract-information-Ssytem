@extends('layouts.app')

@section('content')

    
	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			  <form class="form" method="POST" action="{{ url('search/cc') }}" >
				{{ csrf_field() }}
				
				<div class="form-group">
					<h6>Certificate Issued</h6>
				</div>
				<div class="form-group form-check-inline">
					<input type="radio" class=" form-check-input" name="old" value="yes" checked id="old1"> Before July, 2019
  				</div>
				
				<div class="form-group form-check-inline">
					 
					<input type="radio" name="old" class="form-check-input"  value="no" id="old2"> 
					<label class="form-check-label" for="old2">
    					After July, 2019	
  					</label>
				</div>
				<div class="form-group">
				<input class="form-control" name="search" type="search" placeholder="Write the certificate No" aria-label="Search">
				</div>

				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
		</div>
	</div>		  
	<div class="row">
		<div class="col-md-12">		 
			  

			@if( !empty($contract))

				<div class="table-responsive">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th>Certificate No</th>
								<th>E-GP Id</th>
								<th>Contract/Package No</th>
								<th>Contract Name</th>
								<th>NOA Date </th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						@foreach($contract as $item)
							<tr>
								<td>{{ $item->certificate_no }}</td>
								<td>{{ $item->egp_id }}</td>
								<td>{{ $item->contract_no }}</td>
								<td>{{ $item->name_of_works }}</td>
								<td>{{ $item->noa_date }}</td>
								<td>
									<a class="btn btn-xs" href="{{ url('search/cc/'.$item->certificate_file_id)}}">View</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<div class="pagination-wrapper"> </div>
				</div>

			@elseif( !empty($certificateFile))

				<div class="table-responsive">
					<table class="table table-borderless">
						<thead>
							<tr>
								<th>Certificate No</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						@foreach($certificateFile as $item)
							<tr>
								<td>{{ $item->certificate_no }}</td>
								<td>
									<a class="btn btn-xs" href="{{ url('search/cc/'.$item->id)}}">View</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<div class="pagination-wrapper"> </div>
				</div>

			@endif
		</div>
		<div class="col-md-12" style="min-height: 300px;">
    </div>
            
    
@endsection
