@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">CPU Traffic</span>
				<span class="info-box-number">90<small>%</small></span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Likes</span>
				<span class="info-box-number">41,410</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->

	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>

	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">Sales</span>
				<span class="info-box-number">760</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

			<div class="info-box-content">
				<span class="info-box-text">New Members</span>
				<span class="info-box-number">2,000</span>
			</div><!-- /.info-box-content -->
		</div><!-- /.info-box -->
	</div><!-- /.col -->
</div>
@stop

@section('content')
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Latest Orders</h3>

		<div class="box-tools pull-right">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			</button>
			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="table-responsive">
			<table class="table no-margin">
				<thead>
					<tr>
						<th>Order ID</th>
						<th>Item</th>
						<th>Status</th>
						<th>Popularity</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="pages/examples/invoice.html">OR9842</a></td>
						<td>Call of Duty IV</td>
						<td><span class="label label-success">Shipped</span></td>
						<td>
							<div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR1848</a></td>
						<td>Samsung Smart TV</td>
						<td><span class="label label-warning">Pending</span></td>
						<td>
							<div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR7429</a></td>
						<td>iPhone 6 Plus</td>
						<td><span class="label label-danger">Delivered</span></td>
						<td>
							<div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR7429</a></td>
						<td>Samsung Smart TV</td>
						<td><span class="label label-info">Processing</span></td>
						<td>
							<div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR1848</a></td>
						<td>Samsung Smart TV</td>
						<td><span class="label label-warning">Pending</span></td>
						<td>
							<div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR7429</a></td>
						<td>iPhone 6 Plus</td>
						<td><span class="label label-danger">Delivered</span></td>
						<td>
							<div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
					<tr>
						<td><a href="pages/examples/invoice.html">OR9842</a></td>
						<td>Call of Duty IV</td>
						<td><span class="label label-success">Shipped</span></td>
						<td>
							<div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.box-body -->
	<div class="box-footer clearfix">
		<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
		<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
	</div>
	<!-- /.box-footer -->
</div>
@stop