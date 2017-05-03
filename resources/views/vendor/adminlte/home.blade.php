@extends('adminlte::layouts.app')

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
						<h3 class="box-title">Anda Berhasil Masuk !</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
					</div>
					<!-- /.box-body -->


					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Suhu dan Kelembaban Ruangan</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
									<i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							{!! $chart->render() !!}
						</div>
						<!-- /.box-body -->


						<!-- Default box -->
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Suhu dan Kelembaban Ruangan</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								{!! $chart2->render() !!}
							</div>
							<!-- /.box-body -->


						<!-- Default box -->
						<div class="box">
							<div class="box-header with-border">
								<h3 class="box-title">Kelembaban Tanah</h3>

								<div class="box-tools pull-right">
									<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
										<i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
										<i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="box-body">
								{!! $chart3->render() !!}
							</div>
							<!-- /.box-body -->




			</div>
		</div>
	</div>
@endsection
