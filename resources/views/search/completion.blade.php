@extends('layouts.app')

@section('content')

    
	<div class="row">
		<div class="col-md-12">
			
			  <form class="form-inline" method="POST" action="{{ url('search/cc') }}" >
				{{ csrf_field() }}
				<input class="form-control mr-sm-2 col-md-6 offset-md-2" name="search" type="search" placeholder="Write the certificate No" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
			@if( !empty($contract))
			@foreach($contract as $item)
			<div class="table-responsive">
				<table class="table table-borderless">
					<thead>
						<tr>
							<th>#</th>
							<th>E-GP Id</th>
							<th>Contract/Package No</th>
							<th>Contract Name</th>
							<th>NOA Date </th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					
						<tr>
							<td>{{ $item->id }}</td>
							<td>{{ $item->egp_id }}</td>
							<td>{{ $item->contract_no }}</td>
							<td>{{ $item->name_of_works }}</td>
							<td>{{ $item->noa_date }}</td>
							<td>
								<a class="btn btn-xs" href="{{ url('search/cc/'.$item->id)}}">View</a>
							</td>
						</tr>
					
					</tbody>
				</table>
				<div class="pagination-wrapper"> </div>
			</div>
			@endforeach
			@endif
		</div>
		<div class="col-md-12" style="min-height: 300px;">
    </div>
            
    
@endsection
