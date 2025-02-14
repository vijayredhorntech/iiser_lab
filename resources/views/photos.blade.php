<x-app-layout>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" background: linear-gradient(rgba(3, 27, 78, .4), rgba(3, 27, 78, .4)), url({{asset('assets/images/banner/2.png')}}) center center no-repeat; background-position: center; background-size: cover ">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Photos</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Photos</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/1.jpg')}}" target="_blank"><img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/1.jpg')}}" alt=""></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Lolitika Mandal Lab</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/2.jpg')}}" target="_blank"><img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/2.jpg')}}" alt=""></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Lolitika Mandal Lab</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/3.jpg')}}" target="_blank"><img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/3.jpg')}}" alt=""></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Lolitika Mandal Lab</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/4.jpg')}}" target="_blank"><img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/4.jpg')}}" alt=""></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Lolitika Mandal Lab</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/6.jpg')}}" target="_blank"><img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/6.jpg')}}" alt=""></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Lolitika Mandal Lab</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <a href="{{asset('assets/images/gallery/7.jpg')}}" target="_blank"><img class="img-fluid w-100" style="height: 300px; object-fit: cover" src="{{asset('assets/images/gallery/7.jpg')}}" alt=""></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Lolitika Mandal Lab</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
