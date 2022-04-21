@extends('homepages/base')
@section('ayush')
    <div class="container-fluid text-white py-5"style="background: url('https://appco.themetags.com/img/footer-bg.png')no-repeat center center / cover;height:450px;">
        <div class="container py-5 ">
            <h5 class="display-6 text-light" style="font-size:80px;font-family:Nunito;">Skill Hai! To Future Hai!</h5> 
            <p class="lead text-light mt-3 fs-4" >"AJWS is an on-demand marketplace for top Programming engineers, developers, consultants, architects, programmers, and tutors. Get your projects built by vetted web programming freelancers or learn from expert mentors with team training & coaching experiences in Project based training."</p>
        </div>
    </div>  
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="card shadow border-0">
                    <div class="card-body ">
                        <h3 class="ps-2"style="border-left:6px solid #32393f">Our Courses  </h3>                       
                        {{-- <p class="m-0 fw-bolder">Rs. 6000/- <del>Rs. 9000/-</del></p> --}}
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                @foreach ($courses as $item)
                <div class="col-lg-2 col-6 mb-3">
                    <div class="card border text-center  h-100">
                        <img src="{{ asset('image/' . $item->image) }}" alt="" class="card-img-top img-fluid">
                        <div class="card-body p-2 pb-0  mb-0">
                            <h3 class="h6  mb-0">{{ $item->title }}</h3>
                        </div>
                        <div class="card-footer">
                            <h3 class="fs-bold  mb-0 small"><strong>Duration : {{ $item->duration }} months</strong></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection