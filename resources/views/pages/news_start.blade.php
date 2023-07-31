<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Yangiliklar</h6>
            <h1 class="mb-5">Mahallamiz yangiliklari</h1>
        </div>
{{--        @dd($news)--}}
        <div class="row g-4 justify-content-center">
            @foreach($news as $news1)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" style="height:300px" src="{{asset($news1->photo)}}" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="far fa-eye text-primary me-2"></i>{{$news1->view_count}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{$news1->created_at}}</small>
                    </div>
                    <div class="text-center p-4">
                        <b>{{$news1->title}}</b>
                        <p>{{$news1->short_content}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('view', ['news1' => $news1]) }}" class="btn btn-sm btn-primary" style="border-radius: 30px 30px 30px 30px;">Batafsil</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
