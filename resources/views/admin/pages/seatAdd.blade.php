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
<!-- Trigger the modal with a button -->
<div class="row">
  <div class="col-md-2">

    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Seat</button>
      <br> <br>

    </div>

  <div class="col-md-6">

 <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for room no.." title="Type in a name">
    
  </div>

</div>
      

      <div class="container">
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Seat</h4>
        </div>
        
        <div class="modal-body"> 
          {!! Form::open(['url' => '/addSeat']) !!} <!-- use collective laravel pac-->
              <div class="form-group">

                 {{Form::label('text', 'Room No:')}}
                
                 {{Form::text('roomNo',$value=null,['class'=>'form-control','placeholder'=>'Enter Room No','required','autofocus'])}}



                 {{Form::label('text', 'Seat No:')}}
                
                 {{Form::text('seatNo',$value=null,['class'=>'form-control','placeholder'=>'Enter Seat No','required','autofocus'])}}


                  {{Form::label('text', 'Rent:')}}
                
                 {{Form::text('rent',$value=null,['class'=>'form-control','placeholder'=>'Enter Seat Rent','required','autofocus'])}}




    <span class="text-danger">{{$errors->has('brand_name')? $errors->first('brand_name') : ''}}</span>

              </div>
          
             
        </div>

        
         <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="brand">Submit</button>
        </div>

      {!! Form::close() !!}
    
      </div>
      
    </div>
  </div>
  
</div>

<!-- modal end -->
<!-- form end -->



<!-- seat table start -->
<div class="card col-xs-12" style="padding-bottom: 20px;">
            <div class="card-header">
                <h4 class="card-title">Total Seat =  {{ $seatinfo->total() }}</h4>

                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                      <span class="text-left">in this page {{ $seatinfo->count() }} seat</span>
                        <li style="margin-left: 20px;"><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                       
                    </ul>
                </div>
            </div>

  <div class="card-body collapse in">
      
      <div class="table-responsive">
          <table class="table table-bordered mb-0" id="myTable">
              <thead class="thead-inverse">
                    <tr>
                        <th>Room No</th>
                        <th>Seat No</th>
                        <th>Rent</th>
                        <th>Action</th>
                  </tr>
             </thead>

              <tbody>
            @foreach($seatinfo as $seat)
            <tr>

                    <td>{{$seat->roomNo}}</td>
                    <td>{{$seat->seatNo}}</td>
                    <td>{{$seat->rent}}</td>


                    <td>
                      <a href="{{url('/seat/update/'.$seat->id)}}" class="btn btn-success" style="margin-right: 30px;">
                       <i class="icon-edit2"></i>
                     </a>

                     <a href="{{url('/seat/delete/'.$seat->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure delete this Seat ?')">
                      <i class="icon-trash-o"></i>
                    </a>

                  </td>

          </tr>

          @endforeach
           
            </tbody>

                    </table>

                </div>

                
            </div>
            {{ $seatinfo->links() }}

        </div>
        
   
</div>
<!-- seat table end -->

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

@endsection