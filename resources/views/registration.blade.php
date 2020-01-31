@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<div class="container">
  <div class="col-md-12">
    <div class="container-fluid bg-light py-3">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form style="padding:50px 0;" action="{{ url('/registration') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }} @if(Session::has('success'))
                    <div class="alert alert-success " role="alert">
                        <h2 style="text-align: center;"><b>{{ Session::get('success') }}</b></h2>
                    </div>
                    @endif
                    <div class="card card-body">
                        <h3 class="text-center mb-4">Sign-up</h3>
                        <div class="alert alert-danger">
                            <a class="close font-weight-light" data-dismiss="alert" href="#">×</a>Password is too short.
                        </div>
                        <fieldset>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="username" name="username" type="text" required>
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email" required>
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="Password" name="password" type="password" required>
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="password" name="repass" type="password" required>
                            </div>
                            <div class="form-group has-error">
                                <input class="form-control input-lg" placeholder="country" name="country" type="text" required>
                            </div>
                            <div class="form-group has-success">
                                <input class="form-control input-lg" placeholder="city" name="city" value="" type="text" required>
                            </div>
                            <div class="form-group has-success">
                                <input class="form-control input-lg" placeholder="Contact" name="contact" value="" type="number" required>
                            </div>
                            <div class="form-group has-success">
                                <input class="form-control input-lg" placeholder="address" name="address" value="" required>
                            </div>
                            <div class="form-group has-success">
                                <input type="file" name="img" class="form-control" required>
                                <small><em>Upload profile</em></small>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" value="Sign Me Up" type="submit">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection