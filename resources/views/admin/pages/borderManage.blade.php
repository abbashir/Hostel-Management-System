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
                <h4 class="card-title">Border Info.</h4>
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
                        <th>Phone</th>
                        <th>Relegious</th>
                        <th>Action</th>
                  </tr>
             </thead>

              <tbody>
            @foreach($borderData as $border)
            <tr>

                    <td>{{$border->roomNo}}</td>
                    <td>{{$border->seatNo}}</td>
                    <td>{{$border->name}}</td>
                    <td>{{$border->phone}}</td>
                    <td>{{$border->relegious}}</td>

                    <td>
                      <a href="{{url('/border/view/'.$border->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-eye5"></i>
                     </a>

                     <a href="{{url('/border/update/'.$border->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-edit2"></i>
                     </a>


                     <a href="{{url('/border/delete/'.$border->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this border info. ?')">
                      <i class="icon-trash-o"></i>
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