@extends('maket.master')
@section('content')

    @section('header')

        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>


    @endsection


    <!-- Service Start -->
    @include('pages.servise_start')
    <!-- Service End -->


    <!-- Carousel Start -->
    @include('pages.carousel_start')
    <!-- Carousel End -->

@endsection
