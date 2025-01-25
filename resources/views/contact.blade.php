<x-app-layout>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style=" background: linear-gradient(rgba(3, 27, 78, .3), rgba(3, 27, 78, .3)), url({{asset('assets/images/testimonial.jpg')}}) center center no-repeat;">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid ">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Have Any Query? Feel Free To Contact Us</h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p>
            </div>
            <div class="row contact-info position-relative g-0 mb-5">
                <div class="col-lg-6">
                    <a href="tel:+0123456789" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-phone text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Call Us</h5>
                            <h2 class="text-white mb-0">+012 345 67890</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a href="mailto:info@example.com" class="d-flex justify-content-lg-center bg-primary p-4">
                        <div class="icon-box-light flex-shrink-0">
                            <i class="bi bi-envelope text-dark"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-white">Mail Us</h5>
                            <h2 class="text-white mb-0">info@example.com</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row g-5">
{{--                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>--}}
{{--                    <form>--}}
{{--                        <div class="row g-3">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="text" class="form-control" id="name" placeholder="Your Name">--}}
{{--                                    <label for="name">Your Name</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="email" class="form-control" id="email" placeholder="Your Email">--}}
{{--                                    <label for="email">Your Email</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <input type="text" class="form-control" id="subject" placeholder="Subject">--}}
{{--                                    <label for="subject">Subject</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="form-floating">--}}
{{--                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>--}}
{{--                                    <label for="message">Message</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12">--}}
{{--                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <iframe class="w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4231.7823815493275!2d76.72517118772386!3d30.664957123469808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fe955afa88bcf%3A0xab6356114a6f197f!2sIISER%20Mohali!5e1!3m2!1sen!2sin!4v1737803102912!5m2!1sen!2sin"
                            frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


</x-app-layout>
