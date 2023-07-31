@extends('maket.master')
@section('content')

    @section('header')
        <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Mahallamiz web saytiga xush kelibsiz</h1>
            <p class="fs-4 text-white mb-4 animated slideInDown">Mahallamiz haqida qisqacha ma'lumotlar va
                mahallamizdagi yangiliklar haqida bilib olishingiz mumkin</p>
{{--            <div class="position-relative w-75 mx-auto animated slideInDown">--}}
{{--                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"--}}
{{--                       placeholder="Yangiliklarni qidiriishingiz mumkin">--}}
{{--                <button type="button"--}}
{{--                        class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"--}}
{{--                        style="margin-top: 7px;">Search--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
    @endsection

    <!-- About Start -->
    @include('pages.about_start')
    <!-- About End -->


    <!-- Service Start -->
{{--    @include('pages.servise_start')--}}
    <!-- Service End -->



    <!-- Package Start -->
    @include('pages.news_start')
    <!-- Package End -->


    <!-- Booking Start -->
{{--    @include('pages.online_navbat')--}}
    <!-- Booking Start -->


    <!-- Team Start -->
    @include('pages.employees')
    <!-- Team End -->


    <!-- Carousel Start -->
{{--    @include('pages.carousel_start')--}}
    <!-- Carousel End -->

@endsection
