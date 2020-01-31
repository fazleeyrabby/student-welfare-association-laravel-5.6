@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<div class="container">
	<div class="row my-2">
		<div class="col-lg-8 order-lg-2">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
				</li>
				<li class="nav-item">
					<a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit My Account</a>
				</li>
			</ul>
			<div class="tab-content py-4">
				<div class="tab-pane active" id="profile">
					<h5 class="mb-3">User Profile</h5>
					<div class="row">
						<div class="col-md-6">
							<h6>User Name</h6>
							<p>
								{{ $user_info->username }}
							</p>
							<h6>Email</h6>
							<p>
								{{ $user_info->email }}
							</p>
						</div>
						<div class="col-md-12">
							<h5 class="mt-2"><span class="fa fa-clock-o ion-clock float-right"></span> User Other Info Details</h5>
							<table class="table table-sm">
								<tbody>
									<tr>
										<td>
											<strong>Country:</strong>
											{{ $user_info->country }}
										</td>
									</tr>
									<tr>
										<td>
											<strong>City:</strong>
											{{ $user_info->city }}
										</td>
									</tr>
									<tr>
										<td>
											<strong>Contact:</strong>
											{{ $user_info->contact }}
										</td>
									</tr>
									<tr>
										<td>
											<strong>Address:</strong>
											{{ $user_info->address }}
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!--/row-->
				</div>
				<div class="tab-pane" id="edit">
					<form role="form" action="{{ url('/userinfo-update') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Username</label>
							<div class="col-lg-9">
								<input class="form-control" name="username" type="text" value="{{ $user_info->username }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Email</label>
							<div class="col-lg-9">
								<input class="form-control" name="email" type="email" value="{{ $user_info->email }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Country</label>
							<div class="col-lg-9">
								<input class="form-control" name="country" type="text" value="{{ $user_info->country }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">City</label>
							<div class="col-lg-9">
								<input class="form-control" name="city" type="text" value="{{ $user_info->city }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Contact</label>
							<div class="col-lg-9">
								<input class="form-control" name="contact" type="number" value="{{ $user_info->contact }}">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Address</label>
							<div class="col-lg-9">
								<input class="form-control" name="address" type="text" value="{{ $user_info->address }}" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Password</label>
							<div class="col-lg-9">
								<input class="form-control" name="password" type="password" value="" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Conform Password</label>
							<div class="col-lg-9">
								<input class="form-control" name="repass" type="password" value="" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label">Attach Profile</label>
							<div class="col-lg-9">
								<input class="form-control" name="img" type="file" placeholder="">
								<input class="form-control" name="user_id" type="hidden" value="{{ $user_info->user_id }}" placeholder="">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-lg-3 col-form-label form-control-label"></label>
							<div class="col-lg-9">
								<input type="reset" class="btn btn-secondary" value="Cancel">
								<input type="submit" class="btn btn-success" value="Update">
							</div>
						</div>
					</form>
				</div>
				</div>
			</div>
		<div class="col-lg-4 order-lg-1 text-center">
			<img src="./public/assets/backend_asset/user_img/{{ $user_info->img }}" height="100" width="150">
			<div class="panel-body"><!-- panel-body Starts -->
			<ul class="nav nav-pills nav-stacked" style="display: block;"><!-- nav nav-pills nav-stacked Starts -->
			<li class="">
				<a href="{{ url('/my-journal',$user_info->user_id) }}"> <i class="fa fa-list"> </i> My Blog </a>
			</li>
			<li class="">
				<a href="{{ url('journal/create') }}"> <i class="fa fa-list"> </i> create Blog </a>
			</li>
			
			<!-- <li class="">
				<a href=""> <i class="fa fa-pencil"></i> Edit Account </a>
			</li>
				<a href=""> <i class="fa fa-trash-o"></i> Delete Account </a>
			</li>
			<li> -->
				<a href="{{ url('/user-logout') }}"> <i class="fa fa-sign-out"></i> Logout </a>
			</li>
			</ul><!-- nav nav-pills nav-stacked Ends -->
			</div><!-- panel-body Ends -->
		</div>
	</div>
</div>
@endsection