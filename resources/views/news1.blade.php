@extends('maket.master')
@section('content')
    @section('header')

        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white animated slideInDown">Yangiliklar</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{'index'}}">Bosh sahifa</a></li>
                    <li class="breadcrumb-item"><a href="{{'news'}}">Yangiliklar</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Biz haqimizda</li>
                </ol>
            </nav>
        </div>

    @endsection

    <!-- News Start -->
    @include('pages.news_start')
    <!-- News End -->


    <!-- Booking Start -->
{{--    @include('pages.online_navbat')--}}
    <!-- Booking Start -->




@endsection
