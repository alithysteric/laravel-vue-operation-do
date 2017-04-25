@extends('layout.main')

@section('title', 'LIST USERS')

@section('content')
	
	<div class="row">
		<div class="col-xs-12">
		  	<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
				  <div class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-6"></div>
						<div class="col-sm-6"></div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<tr role="row">
										<th>No.</th>
										<th>Username</th>
										<th>Full Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $row => $user)
										<tr role="row" class="odd">
										  <td>{{ ($users->currentPage() * $users->perPage() + $row) - $users->perPage() + 1 }}</td>
										  <td>{{ $user->username }}</td>
										  <td>{{ $user->name }}</td>
										  <td></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="dataTables_info">
								Showing {{ $users->perPage() * $users->currentPage() - $users->perPage() + 1 }} 
								to {{ $users->perPage() * $users->currentPage() }}
								of {{ $users->total() }} entries
							</div>
						</div>
						<div class="col-sm-7">
							{{ $users->links() }}
						</div>
					</div>
				</div>
				<!-- /.box-body -->
		    </div>
		    <!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- row -->
@stop
