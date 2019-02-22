@extends('admin.master')
@section('title','Dashboard')

@section('body_content')
   
   <div class="row">

   <?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif



<!-- brand table -->
<div class="card col-xs-12" style="padding-bottom: 20px;">
            <div class="card-header">
                <h4 class="card-title">Border info. for payment</h4>
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
      
      <div class="table-responsive">
          <table class="table table-bordered mb-0">
              <thead class="thead-inverse">
                    <tr>
                        <th>Room No</th>
                        <th>Seat No</th>
                        <th>Name</th>
                        
                        <th>Action</th>
                  </tr>
             </thead>

              <tbody>
            @foreach($borderData as $border)
            <tr>

                    <td>{{$border->roomNo}}</td>
                    <td>{{$border->seatNo}}</td>
                    <td>{{$border->name}}</td>
                   

                    <td>

                    <a href="{{url('/payment/confirm/'.$border->seatNo)}}" class="btn btn-success" style="margin-right: 30px;">payment
                       <i class="icon-edit2"></i>
                     </a>

                  </td>

          </tr>
          @endforeach
           
            </tbody>
                    </table>
                </div>
            </div>
        </div>
        
   
</div>

@endsection