@extends('layouts.app')

@section('content')
    <div class="container shadow" style="min-height: 1000px">
        <div id="carouselExampleControls" class="carousel slide border" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url('/images/home/cropped-2016_tennispadelblanes.jpg') }}" alt="First slide">
              </div>
             
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
@endsection
