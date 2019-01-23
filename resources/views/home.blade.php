@extends('layouts.app')
  @section('head')
    <title>Inversiones JL</title>
  @endsection
  @section('block')
  
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
      <img src="/imagenes/car1.jpg" alt="Los Angeles" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
  
      <div class="item">
      <img src="/imagenes/car3.jpg" alt="Chicago" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
  
      <div class="item">
      <img src="/imagenes/car4.jpg" alt="New York" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
  
      <div class="item">
      <img src="/imagenes/car2.jpg" alt="New York" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
  
      <div class="item">
      <img src="/imagenes/car5.jpg" alt="New York" style="width:100%;">
      <div class="carousel-caption">
      </div>
      </div>
  
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
  @endsection