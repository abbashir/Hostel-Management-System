@extends('admin.master')
@section('title','Dashboard')

@section('body_content')
   
 <div class="row">
 
<!-- form start -->
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title" id="basic-layout-form-center">Update Border Info.</h4>
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

                {!! Form::open(['url' => '/UpdateBorder','name'=>'Borderupdate']) !!} <!-- use collective laravel pac-->

                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="form-body">

                            <!-- pass for update -->

                            <input type="hidden" name="BorderId" class="form-control" value="{{$borderByid->id}}">


                            <div class="form-group">
                                <label for="issueinput5">Room No:</label>
                                
                                <input type="number" name="rooNumber" class="form-control" placeholder="Enter room no" required="required" value="{{$borderByid->roomNo}}">

                            </div>


                            <div class="form-group">
                                <label for="issueinput5">Name:</label>
                                
                                <input type="text" name="Name" class="form-control" placeholder="Enter name" required="required" value="{{$borderByid->name}}">

                            </div>

                            <div class="form-group">
                                <label for="issueinput5">Father Name:</label>
                                
                                <input type="text" name="fName" class="form-control" placeholder="Enter father name" required="required" value="{{$borderByid->fName}}">

                            </div>


                            <div class="form-group">
                                <label for="issueinput5">Mother Name:</label>
                                
                                <input type="text" name="mName" class="form-control" placeholder="Enter mother name" required="required" value="{{$borderByid->mName}}">

                            </div>


                            <div class="form-group">
                                <label for="issueinput5">Institute:</label>
                                
                                <input type="text" name="Institute" class="form-control" placeholder="Enter Institute name" required="required" value="{{$borderByid->institute}}">

                            </div>


                         

                            <div class="form-group">
                                <label for="issueinput5">NID No:</label>
                                
                                <input type="number" name="nidNo" class="form-control" placeholder="Enter NID No" required="required" value="{{$borderByid->NID}}">

                            </div>


                            <!-- <div class="form-group">
                                    <label for="issueinput5">Blood group:</label>
                                    <select id="issueinput5" name="blood" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
                                <option>select one</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                        

                                    </select>
                           </div> -->


                            <div class="form-group">
                                    <label for="issueinput5">Relegious:</label>
                                    <select id="issueinput5" name="Relegious" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Priority" data-original-title="" title="">
                                <option>select one</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Chistian">Chistian</option>
                               
                                        

                                    </select>
                           </div>


                            <div class="form-group">
                                <label for="issueinput5">Phone Number:</label>
                                
                                <input type="number" name="phone" class="form-control" placeholder="Enter Phone Number" required="required" value="{{$borderByid->phone}}">

                            </div>


                    


                        </div>
                    </div>
                </div>

                <div class="form-actions center">
                    <button type="button" class="btn btn-warning mr-1">
                        <i class="icon-cross2"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="icon-check2"></i> Save
                    </button>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
<!-- form end -->
        
   
</div>
{{$borderByid->relegious}}
<?php $var = "$borderByid->relegious"; 
echo "$var";

?>
  <!-- for relegiuos select show -->
      <script type="text/javascript">
        document.forms['Borderupdate'].elements['Relegious'].value="<?php echo $var ?>"
      </script>



@endsection