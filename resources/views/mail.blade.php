@extends('layouts.frontLayouts.layout')
@section('title','Ticket & Tourism')
@section('content')
<div class="col-md-12">
   <div class="x_panel">
      <div class="container content">
         <div class="row">
            <div class="col-md-12">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h2 style="margin-top:28px;"><i class="fa fa-fw fa-compass"></i>Contact Us</h2>
                  </div>
                  <div class="panel-body">
                    
                     <div class="x_content">
                       
                        <div class="col-md-12">
                           <h4><strong>Get in Touch</strong></h4>
                           <form action="{{ url('/postmail') }}" method="post" class="form-horizontal">
                              {{ csrf_field()}}
                              <div class="form-group">
                                 {!! Form::label('name', 'Name',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('name','',array('class' => 'form-control col-md-7 col-xs-12', 'required' => 'required')) !!}
                                 </div>
                              </div>
                             <!--  <div class="form-group">
                                 {!! Form::label('type','Email',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::email('email','',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
                                 </div>
                              </div> -->
                              <div class="form-group">
                                 {!! Form::label('phone','Phone',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::number('phone','',array('class'=>'form-control col-md-7 col-xs-12', 'required'=>'required')) !!}
                                 </div>
                              </div>
                              <div class="form-group">
                                 {!! Form::label('message','Message',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 <div class="col-md-9 col-sm-9 col-xs-12">
                                    {!! Form::textarea('message',null,['class' => 'form-control summernote', 'required'=>'required']) !!}
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="Submit" class="btn btn-success">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection