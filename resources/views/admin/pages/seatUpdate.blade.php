@extends('admin.master')
@section('title','Add Seat')

@section('body_content')
   
   <div class="row">
   <?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

<!-- form start -->

<!-- form start -->
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form-center">Update Seat Info.</h4>
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

                {!! Form::open(['url' => '/updateSeat','name'=>'Borderupdate']) !!} <!-- use collective laravel pac-->

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-body">

                            <!-- pass for update -->

                            <input type="hidden" name="seatId" class="form-control" value="{{$seatByid->id}}">


                            <div class="form-group">
                                <label for="issueinput5">Room No:</label>
                                
                                <input type="text" name="roomNo" class="form-control" required="required" value="{{$seatByid->roomNo}}">

                            </div>

                            <div class="form-group">
                                <label for="issueinput5">Seat No:</label>
                                
                                <input type="text" name="seatNo" class="form-control" required="required" value="{{$seatByid->seatNo}}">

                            </div>

                            <div class="form-group">
                                <label for="issueinput5">Rent:</label>
                                
                                <input type="text" name="rent" class="form-control" required="required" value="{{$seatByid->rent}}">

                            </div>


                          
                        </div>
                    </div>
                </div>

                <div class="form-actions center">
                    <button type="button" class="btn btn-warning mr-1">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-check2"></i> Update
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