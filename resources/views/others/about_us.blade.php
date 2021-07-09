@extends ('layout')

@section ('content')

<!-- Start Banner Hero -->
<section class="bg-light w-100">
    <div class="container">
        <div class="row d-flex align-items-center py-5">
            <div class="col-lg-6 text-start" style="animation: transitionIn 2s;">
                <h1 class="h2 py-5 text-primary typo-space-line">About Us</h1>
                <p class="light-300 text-muted" style="text-align: justify;">
                    Solving real problems takes real commitment and vision. Odyssey Nepal is an organization established in
                    2021 A.D. We are officially registered at Kathmandu District Administration Office and
                    affiliated to Social Welfare Council. Our Head office is situated at Tokha Municipality
                    Kathmandu, Nepal. Our network connecting more than 15 districts of Nepal and
                    Different other countries too.
                    Odyssey Nepal works to eradicate social problems that occurs day to day or we can say that we work for
                    every social cause that is important regardless the circumstances. Odysseyians are the team of literate
                    and professional's, youth who are committed and determined to work for the development of the country.
                    We solely works for social cause and promotes social harmony.
                </p>
                <p class="light-300 text-muted" style="text-align: justify;">
                    <strong class="text-secondary">We see differently:</strong> Our multi-disciplinary perspective helps us see challenges in unique ways.
                </p>
                <p class="light-300 text-muted" style="text-align: justify;">
                    <strong class="text-secondary">We think differently:</strong> We apply leadership and expertise to social issues and find unique solutions.
                </p>
                <p class="light-300 text-muted" style="text-align: justify;">
                    <strong class="text-secondary">We act responsibly:</strong> Our passion and perseverance create lasting change.
                    We make a difference at home and around the world. Our members can be found in your community
                    and across the globe.
                </p>
            </div>
            <div class="col-lg-6">
                <img class="about_us" src="{{ URL::asset('img/service-05.jpg') }}">
            </div>
        </div>
    </div>
</section>
<!-- End Banner Hero -->

<!-- Start Choice -->
<section class="why-us banner-bg bg-light">
    <div class="container my-4">
        <div class="row">
            <div class="banner-img col-lg-5">
                <img src="{{ URL::asset('img/gallery/history.jpg') }}" class="rounded img-fluid" alt="" style="box-shadow: 0 25px 60px #777;">
            </div>
            <div class="banner-content col-lg-7 align-self-end">
                <h2 class="h2 pb-3">Our History</h2>
                <p class="text-muted pb-5 light-300">
                    You are allowed to download and use this Purple Buzz template for your websites. You are <strong>not allowed</strong> to re-distribute this template ZIP file on other template websites. It is quite easy to simply copy and repost the ZIP file on any <a rel="nofollow" href="https://www.google.com/search?q=free+css" target="_blank">Free CSS collection</a> websites.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choice -->

    <!-- Start Aim -->
    <section class="banner-bg bg-white py-5">
        <div class="container my-4">
            <div class="row text-center">

                <div class="objective col-lg-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-bulb text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Vision</h2>
                    <p class="light-300">
                        Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse commodo viverra.
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class='display-4 bx bx-revision text-light'></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Mission</h2>
                    <p class="light-300">
                        Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam quis.
                    </p>
                </div>

                <div class="objective col-lg-4 mt-sm-0 mt-4">
                    <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                        <i class="display-4 bx bxs-select-multiple text-light"></i>
                    </div>
                    <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300">Our Goal</h2>
                    <p class="light-300">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- End Aim -->

    @endsection