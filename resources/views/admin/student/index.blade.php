@extends('admin/layouts/master')
@section('content')
<body class="hold-transition skin-blue sidebar-mini">
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Hover Data Table</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example2" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Student Roll</th>
									<th>Student Name</th>
									<th>Student Email</th>
									<th>Student Phone</th>
									<th>Student Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Trident</td>
									<td>Internet
										Explorer 4.0
									</td>
									<td>Win 95+</td>
									<td> 4</td>
									<td>X</td>
								</tr>
								<tr>
									<td>Trident</td>
									<td>Internet
										Explorer 5.0
									</td>
									<td>Win 95+</td>
									<td>5</td>
									<td>C</td>
								</tr>
								<tr>
									<td>Trident</td>
									<td>Internet
										Explorer 5.5
									</td>
									<td>Win 95+</td>
									<td>5.5</td>
									<td>A</td>
								</tr>
								<tr>
									<td>Trident</td>
									<td>Internet
										Explorer 6
									</td>
									<td>Win 98+</td>
									<td>6</td>
									<td>A</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
				
				<!-- ./wrapper -->
				<!-- jQuery 3 -->
				<!-- page script -->
				@endsection