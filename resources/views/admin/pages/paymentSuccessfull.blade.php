@extends('admin.master')
@section('title','Dashboard')

@section('body_content')

  <?php $m = Session::get('message') ?>
@if (@isset ($m))
<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> {{$m}}
  </div>
@endif

<div class="alert alert-success no-border mb-2" role="alert">
    <strong>Well done!</strong> payment complate
  </div>



<a href="{{url('/payment/print/'.$seat)}}" target="_blank">download</a>
     
{{$seat}}





@endsection