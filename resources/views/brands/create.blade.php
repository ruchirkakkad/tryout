@extends('template.master')

@section('content')



<form action="{{ url('brands/store') }}" method="post">
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<input type="text" name="name" placeholder="Brand Name">
	<input type="submit" name="submit" value="Create">
</form>

@stop
