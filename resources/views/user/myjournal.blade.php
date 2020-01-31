@extends('layouts.frontLayouts.layout')
@section('title','স্টুডেন্টস ওয়েলফেয়ার এসোসিয়েশন')
@section('content')
<section class="journalpart samemarign15">
   <div class="container">
      <div class="row">
         <div class="pdfpagearea">
            <!-- <div class="pdfheading">
               <h3>Stamford University Current Journal Paper</h3>
               
            </div> -->
         </div>
         <div class="col-md-12">
            <div class="success">
                   @if(Session::has('alert-info'))
                    <div class="alert alert-info col-md-6 col-md-offset-3 col-sm-12" role="alert">
                      <h2 style="text-align: center;"><b>{{ Session::get('alert-info') }}</b></h2>
                    </div>  
                    @endif
                   </div>
            <div class="col-md-12">
               <div class="volumepart">
                   <p class="text-danger" style="size: a4; text-align: left;">
                     <em class="text-success">
                        <strong style="font-size: 30px;">List</strong>
                     </em>
                     <em class="text-danger">
                        <strong style="font-size: 30px;">of</strong>
                     </em>
                     <em class="text-success">
                        <strong style="font-size: 30px;">B</strong>
                        log
                     </em>
                  </p><hr>
               </div>
               <div class="articaleareapdf">
                  <!-- <h5>Articles</h5> -->
                  @foreach($journal_data as $journal)
                  <div class="contentarticle">
                     <div class="leftcontentarticle">
                        <a href="{{ url('view-userjournal',$journal->journal_id) }}" style="text-underline-position: none;">{{ $journal->journal_title }}</a>
                        <div class="metaauthor">
                           @if($journal->status=='1')
                              <p><span style="background-color: green;" class="label label-success">{!! "Published" !!}</span></p>
                           @elseif($journal->status=='0')
                              <p type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><span class="label label-danger">Pending</span>
                              </p>
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 style="text-align: center;color: red;text-transform: lowercase;" class="modal-title" id="exampleModalLabel">If want your Journal published. You will be pay 500TK.</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                       </div>
                                       <div class="modal-body">
                                         <form method="post" action="{{ url('transaction',$journal->journal_id) }}">
                                             {{ csrf_field() }}
                                             <label>Bkash agent number:</label>
                                             <input type="number" name="bkash_num" value="01682260694" required=""><br>
                                             <label>Amount:</label>
                                             <input type="number" name="amount" min="500" max="1000" value="500" required><br>
                                             <input type="hidden" name="journal_id" value="{{ $journal->journal_id }}">
                                             <label>Enter pin code:</label>
                                             <input type="password" name="pin_num" required>
                                             <small id="fileHelp" class="form-text text-muted">Please enter pin <em style="color: red;">5</em> digits.</small>
                                             <br>
                                             <button type="submit" name="btn">submit</button>
                                          </form>
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           @endif
                        </div>
                     </div>
                     <div class="rightcontentarticle">
                        <a href="../public/assets/backend_asset/userjournal_file/{{ $journal->filetoupload }}"><button type="submit" style="" class="">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        </button></a>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection