@extends('vendor::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Kategori</th>
									<th>Jumlah</th>
									<th>Judul Postingan</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									@foreach($data as $a)
									<tr>
										<td>{{$a->name}}</td>
										<td>
											<a href="{{url('category/'.$a->id)}}" class="btn btn-primary"><i class="glyphicon glyphicon-eye-open"></i></a>
										</td>
										<td>
											<a href="{{url('category/'.$a->id.'/edit_category')}}" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
										</td>

										<td><form class="" action="{{url('category/'.$a->id)}}" method="post">
											{{method_field('delete')}}
											{{csrf_field()}}
											<button type="submit" class="btn btn-danger" name="button"><i class="glyphicon glyphicon-trash"></i></button>
										</form></td>
										<!-- <td>{{$a->address}}</td> -->
									</tr>
									@endforeach
								</tr>
							</tbody>
						</table>
						<!-- {{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application! -->
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
