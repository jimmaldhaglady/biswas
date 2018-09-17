@extends('layouts.admin')
@section('style')
<link href="{{ asset('css/bootstrap.min.css" rel="stylesheet') }}">
<link href="{{ asset('css/sb-admin.css" rel="stylesheet') }}">
<link href="{{ asset('css/plugins/morris.css" rel="stylesheet') }}">
<link href="{{ asset('font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css') }}">
angular.min.js
@endsection
@section('content')
<div id="wrapper">
   <div id="page-wrapper">
      <div class="container">
         <h1 class="page-header" style="padding-left: 340px"><strong style="color: #00BFFF">Batches and Timing</strong> <strong style="color: #00BFFF">Details</strong></h1>
         <h1 class="page-header">
            <h2 style="color: #00BFFF">Add Batches and Timing</h2>
         </h1>
         <div class="panel-body">
            <div class="container">
               <form action="{{route('batchstiming.store ')}}" method="">
                  <div class="col-md-8">
                     <div class="col-md-12">
                        <label class="col-md-3">Course:</label>
                        <select id="inputcourse" style="min-height: 40px;" class="col-md-9 form-control" name="course" required>
                           <option selected> Select Course</option>
                           <option > CA+B.Com</option>
                           <option >CMA+B.Com </option>
                           <option>CS+B.Com </option>
                           <option >Professional B.Com</option>
                        </select>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Batchs:</label>
                        <input type="text"  placeholder="Enter Batch Name Here.." class=" col-md-9 form-control" name="batchname" required>
                     </div>
                   
                     <div class="col-md-12">
                        <label class="col-md-3">Batch Type:</label>
                        <input type="text" placeholder="REGULAR, CRASH COURSE, etc" class=" col-md-9 form-control" name="batchtype" required>
                     </div>

                     <div class="col-md-12">
                        <label class="col-md-3">Begin On:</label>
                        <input type="date"  class=" col-md-9 form-control" name="batchbegin" required>
                     </div>
                     <div class="col-md-12">
                        <label class="col-md-3">Class Timing:</label>
                        <input type="text"  placeholder="Enter Class Time Here.." class=" col-md-9 form-control" name="batchtime">
                     </div>
                      <div class="col-md-12">
                        <label class="col-md-3">Batch Order:</label>
                        <input type="text"  placeholder="Enter Class batch Order.." class=" col-md-9 form-control" name="batchorder" >
                     </div>
                     <div class="clearfix col-md-12"><br />
                        <button type="submit" class="btn btn-sm btn-success col-md-1 pull-right" style="margin:18px;"><i class="fa fa-plus" aria-hidden="true"></i>
                        ADD </button>  
                     </div>
                  </div>
            </form>

            </div>  

            <div class="col-md-12"><br /><br /></div>
         </div>
      </div>
      <div class="panel-body">
         <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped" style="height:100%">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Course</th>
                     <th>Batch Name</th>
                     <th>Batchtype</th>
                     <th>Batch begin</th>
                     <th>Batch time</th>
                      <th>Batch Order</th>
                     <th>Operation</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($course as $key=>$batches)

                  <tr>
                     <td>{{$batches->id}}</td>
                     <td>{{$batches->course}}</td>
                     <td>{{$batches->batchname}}</td>
                     <td>{{$batches->batchtype}}</td>
                     <td>{{$batches->batchbegin}}</td>
                     <td>{{$batches->batchtime}}</td>
                     <td>{{$batches->batchorder}}</td>
                     <td style="width: 30px">

  <a href="{{route('batchs-timing.destroy',$batches->id)}}">
<i class="fa fa-trash" aria-hidden="true"></i>&nbspDelete<BR/></a>

                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
</div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/angular.min.js')}}"></script>
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{ asset('js/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('js/plugins/morris/morris-data.js')}}"></script>
@if(Session::has('flash_message'))
<script type="text/javascript">
   toastr.<?php echo Session::get('alert-class');?>('<?php echo Session::get('flash_message');?>');
</script>
@endif 
@endsection