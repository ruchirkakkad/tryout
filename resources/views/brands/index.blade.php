@extends('template.master')

@section('content')
<h2>Brands</h2>

<div>
	<a href="{{ url('brands/create') }}">Create New</a>
</div>
<table border='1'>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Products Count</th>
	</tr>

	@foreach($brands as $brand)
	<tr>
		<td>{{ $brand->id }}</td>
		<td>{{ $brand->name }}</td>
		<td>0</td>
	</tr>
	@endforeach


</table>

@stop
