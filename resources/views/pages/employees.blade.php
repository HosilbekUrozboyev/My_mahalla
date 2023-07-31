<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Hodimlarimiz</h6>
            <h1 class="mb-5">Mahallamiz masul hodimlari</h1>
        </div>
            <div class="row g-4">
                @foreach($employees as $key=>$employee)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset($employee->photo)}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="{{asset($employee->telegram_link)}}"><i class="fab fa-telegram"></i></a>
                            <a class="btn btn-square mx-1" href="{{asset($employee->facebook_link)}}"><i class="fab fa-facebook"></i></a>
                            <a class="btn btn-square mx-1" href="{{asset($employee->instagram_link)}}"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{$employee->name.' '.$employee->surname}}</h5>
                            <small>{{$employee->position}}</small><br>
                            <small>{{$employee->telephoneNumber}}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
