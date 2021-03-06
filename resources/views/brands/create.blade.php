@extends('template.master')

@section('content')
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">Create new Brand</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="{{ url('brands/store') }}" method="post">
					<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="text" class="form-control"  name="name" placeholder="Brand Name">                      
						</div>                    
					</div><!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div><!-- /.box -->
		</div>
	</div>
</section>
@stop
