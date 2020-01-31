@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<section class="advisor-area">
   <div class="col-md-12">
      <div class="container">
         <div class="well">
            <div class="section-title text-center" >
               <div class="section-title mb-100">
                <p class="text-danger" style="size: a4; text-align: center;">
                   <em class="text-danger">
                      <strong style="font-size: 30px;">Blood</strong>
                   </em>
                   <em class="text-success">
                      <strong style="font-size: 30px;">D</strong>
                      onor
                   </em>
                </p>
                <p class="text-success">List of <strong>Blood</strong> donar</p><hr>
             </div>
           </div>
            <div class="title_right">
               <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                     <form method="get" action="{{ url('bldgrpsrc/') }}">
                        <div class="">
                           <input type="text" name="blood_group" placeholder="Search Blood Group">
                           <button type="submit" class="btn-success">search</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <div class="table-responsive bg-info" >
               <table id="myDataTable" class="table table-hover text-white" style="word-wrap: break-word;">
                  <tbody>
                     <tr>
                        <th>Profile</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Blood Group</th>
                        <th>City</th>
                     </tr>
                     @foreach($members as $member)
                     <tr style="page-break-inside: avoid;" class="success">
                        <td><img class="profilePic" style="height: 75px;width: 75px;" src="./public/assets/backend_asset/profile_pic/{{ $member->profile_pic }}"></td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->contact }}</td>
                        <td>
                           @if($member->blood_group== 1)
                           {!! "A+(Positive)" !!}
                           @elseif($member->blood_group== 2)
                           {!! "A-(Negetive)" !!}
                           @elseif($member->blood_group== 3)
                           {!! "B+(Positive)" !!}
                           @elseif($member->blood_group== 4)
                           {!! "B-(Negetive)" !!}
                           @elseif($member->blood_group== 5)
                           {!! "O+(Positive)" !!}
                           @elseif($member->blood_group== 6)
                           {!! "O-(Negetive)" !!}
                           @elseif($member->blood_group== 7)
                           {!! "AB+(Positive)" !!}
                           @elseif($member->blood_group== 8)
                           {!! "AB-(Negetive)" !!}
                           @endif 
                        </td>
                        <td>{{ $member->address }}</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
            {{ $members->render() }}
         </div>
      </div>
   </div>
</section>
@endsection