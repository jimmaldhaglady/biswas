@extends('layouts.app')

@section('style')
<!--  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/style3.css') }}" rel="stylesheet"> -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
@endsection

@section('content')


<div class="container">
<!--   <h2>Carousel Example</h2>   -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/result/1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/result/2.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/result/3.jpg" alt="" style="width:100%;">
      </div>
      <!--  <div class="item">
        <img src="images/result/4.jpg" alt="" style="width:100%;">
      </div>
       <div class="item">
        <img src="images/result/5.jpg" alt="" style="width:100%;">
      </div>
       <div class="item">
        <img src="images/result/6.jpg" alt="" style="width:100%;">
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--  -->


@endsection

@section('script')
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection