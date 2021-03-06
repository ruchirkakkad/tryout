@extends('template.master')

@section('content')

<section>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Brands</h3>
					<div class="box-tools">
						<div class="input-group">							
							<div class="input-group-btn">
								<a href="{{ url('brands/create') }}"><button class="btn btn-sm btn-default">Create New</button></a>
							</div>
						</div>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Products Count</th>                      
						</tr>
						@foreach($brands as $brand)
						<tr>
							<td>{{ $brand->id }}</td>
							<td>{{ $brand->name }}</td>
							<td><span class="label label-success">{{ count($brand->products) }}</span></td>
						</tr>
						@endforeach                    
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>

</section>
@stop
