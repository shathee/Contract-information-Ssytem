@extends('layouts.app')

@section('content')

    
	<div class="row">
		<div class="col-md-12">
			
			  <form class="form-inline" method="POST" action="{{ url('search/cwh') }}" >
				{{ csrf_field() }}
				<input class="form-control mr-sm-2 col-md-6 offset-md-2" name="search" type="search" placeholder="Write Contractor Name or part of it" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			  </form>
			@if( !empty($contract))
			
			<div class="table-responsive">
				<table class="table table-borderless">
					<thead>
						<tr>
							<th>#</th>
							<th>E-GP Id & Contract/Package No</th>
							<th>Name of The Contractor</th>
							<th>Name of Works</th>
							<th>NOA Date </th>
							<th>Commencement Date</th>
							<th>Value of Contract</th>
						</tr>
					</thead>
					<tbody>
					@foreach($contract as $item)
						<tr>
							<td>{{ $item->id }}</td>
							<td>
								{{ $item->egp_id }}
							</br>
							{{ $item->contract_no }}
							</td>
							<td>{{ $item->contractors_legal_title }}</td>
							<td>{{ $item->name_of_works }}</td>
							<td>{{ $item->noa_date }}</td>
							<td>{{ $item->contract_date_of_commencement }}</td>
							<td>{{ $item->original_contract_price  }}</td>
							
						</tr>
					@endforeach
					</tbody>
				</table>
				<div class="pagination-wrapper"> </div>
			</div>
			
			@endif
		</div>
    </div>
            
    
@endsection
