@extends('maket.master')

@section('header')

    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
        <h1 class="display-3 text-white animated slideInDown">Yangilik haqida batafsil</h1>
        {{--            <nav aria-label="breadcrumb">--}}
        {{--                <ol class="breadcrumb justify-content-center">--}}
        {{--                    <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
        {{--                    <li class="breadcrumb-item"><a href="#">Pages</a></li>--}}
        {{--                    <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>--}}
        {{--                </ol>--}}
        {{--            </nav>--}}
    </div>

@endsection


@section('content')

    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden p-5 w-100">
                            <img class="img-fluid" style="height:400px" src="{{asset($news->photo)}}">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="far fa-eye text-primary me-2"></i>{{$news->view_count}}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$news->created_at}}</small>
                        </div>
                        <div class="text-center p-4">
                            <b>{{$news->title}}</b>
                            <p>{{$news->short_content}}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('news1') }}" class="btn btn-sm btn-primary" style="border-radius: 30px 30px 30px 30px;">Orqaga</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection


