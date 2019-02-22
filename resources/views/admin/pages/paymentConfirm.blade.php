@extends('admin.master')
@section('title','Dashboard')

@section('body_content')
   
 <div class="row">
 
   
       
<!-- {{$borderByid->roomNo}}
{{$borderByid->seatNo}}
{{$borderByid->name}}
{{$seatByid->rent}} -->
   

<!-- form start -->
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form-center">Payment Process</h4>
            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                    <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="card-body collapse in">
            <div class="card-block">

                {!! Form::open(['url' => '/payment/successfull']) !!} <!-- use collective laravel pac-->

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-body">



                    <p class="lead">Border short information</p>
                    <div class="table-responsive">
                        <table class="table">
                          <tbody>
                            <tr>
                                <td>Name</td>
                                <td class="text-xs-right">{{$borderByid->name}}</td>
                            </tr>
                            <tr>
                                <td>Room No</td>
                                <td class="text-xs-right">{{$borderByid->roomNo}}</td>
                            </tr>

                            <tr>
                                <td>Seat No</td>
                                <td class="text-xs-right">{{$borderByid->seatNo}}</td>
                            </tr>

                             <tr>
                                <td>Phone No</td>
                                <td class="text-xs-right">{{$borderByid->phone}}</td>
                            </tr>

                            <tr>
                                <td class="text-bold-800">Rent amount</td>
                                <td class=" pink text-xs-right">{{$seatByid->rent}}</td>
                            </tr>
                           <!--  <tr class="bg-grey bg-lighten-4">
                                <td class="text-bold-800">Balance Due</td>
                                <td class="text-bold-800 text-xs-right">$ 12,000.00</td>
                            </tr> -->
                          </tbody>
                        </table>
                    </div>
                    <div class="text-xs-center">
                    </div>
                


                          


                   <!--    <p>
                            <h4><b>Name:</b> {{$borderByid->name}}</h4>
                            <h4><b>Room:</b> {{$borderByid->roomNo}}</h4> 

                            <h4><b>Seat No:</b> {{$borderByid->seatNo}}</h4> 
                            <h4><b>Rent:</b> {{$seatByid->rent}}</h4> 


                            
                        </p> -->


                        <div class="form-group col-md-6">
                                    <label for="issueinput5">Month:</label>
                                    <select id="issueinput5" name="month" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" required="required">
                                <option>select Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                                        

                                    </select>
                           </div>


                            <div class="form-group col-md-6">
                                    <label for="issueinput5">Year:</label>
                                    <select id="issueinput5" name="year" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" required="required">
                                <option>select Year</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                               
                                        

                                    </select>
                           </div>    

                           <div class="form-group">
                                <label for="issueinput5">Fine:</label>
                                
                                <input type="text" name="fine" class="form-control" placeholder="0.00">

                            </div>

                        <!-- hiddent seat No -->
           <input type="hidden" name="seatNo" value="{{$seatByid->seatNo}}">
           <input type="hidden" name="name" value="{{$borderByid->name}}">
           <input type="hidden" name="roomNo" value="{{$borderByid->roomNo}}">
           <input type="hidden" name="phone" value="{{$borderByid->phone}}">
           <input type="hidden" name="rent" value="{{$seatByid->rent}}">







                        </div>
                    </div>
                </div>

                <div class="form-actions center">
                    <button type="button" class="btn btn-warning mr-1">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-check2"></i> payment confirm
                    </button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<!-- form end -->



        
   
</div>





@endsection