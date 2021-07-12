@extends('layouts.app')

@section('content')

<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
   <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

      <!-- Start slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="background: rgb(73 68 68 / 33%)">
         <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">

               <div class="py-5 row d-flex align-items-center">
                  <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5" style="animation: transitionIn 2s;">
                     <h1 class="banner-heading h1 display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line" style="color: #e7e7ed">
                        <strong>Welcome to the official site of Odyssey Nepal</strong>
                        <br>
                     </h1>
                     <!-- <p class="banner-body py-3 mx-0 px-0" style="color: #e6eaed">
                     We are a group of People who are determined to be a part of <a rel="nofollow" href="https://templatemo.com/page/1" target="_parent">social activity</a> and abolish the problems in every possible way. <a rel="nofollow" href="https://boxicons.com/" target="_blank">Social work</a> is our main Aim.
                  </p>
                  <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a> -->
                  </div>
               </div>

            </div>
            <div class="carousel-item">

               <div class="py-5 row d-flex align-items-center">
                  <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                     <h1 class="banner-heading h1 display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line" style="color: #e7e7ed">
                        <strong>Together for positive change</strong>
                     </h1>
                     <!-- <p class="banner-body py-3" style="color: #e6eaed">
                  We act together to bring positive change in society.
               </p>
               <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="#" role="button">Get Started</a> -->
                  </div>
               </div>

            </div>
         </div>
         <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <i class='bx bx-chevron-left'></i>
            <span class="visually-hidden">Previous</span>
         </a>
         <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <i class='bx bx-chevron-right'></i>
            <span class="visually-hidden">Next</span>
         </a>
      </div>
      <!-- End slider -->

   </div>
</div>
<!-- End Banner Hero -->


<!-- Start Service -->
<!-- <section class="service-wrapper">
  <div class="container-fluid pb-3">
   <div class="row">
    <h2 class="h2 text-center col-12 py-5 semi-bold-600">Social Services</h2>
    <div class="service-header col-2 col-lg-3 text-end light-300">
     <i class='bx bx-gift h3 mt-1'></i>
  </div>
  <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
     <h2 class="h3 pb-4 typo-space-line">Make Success for future</h2>
  </div>
</div>
<p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
 You are free to use this template for your commercial or business websites. You are not allowed to re-distribute this template ZIP file on any template collection websites. It is too easy to illegally copy and repost this template.
</p>
</div>
</section> -->
<!-- End Services -->


<!-- Start View work -->
<!-- <section class="bg-secondary">
   <div class="container py-5">
    <div class="row d-flex justify-content-center text-center">
     <div class="col-lg-2 col-12 text-light align-items-center">
      <i class='display-1 bx bxs-box bx-lg'></i>
   </div>
   <div class="col-lg-7 col-12 text-light pt-2">
      <h3 class="h4 light-300">Great transformations successful</h3>
      <p class="light-300">Quis ipsum suspendisse ultrices gravida.</p>
   </div>
   <div class="col-lg-3 col-12 pt-4">
      <a href="gallery.php" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">View Our work</a>
   </div>
</div>
</div>
</section> -->
<!-- End View work -->

<!-- Start Recent work -->
<section class="py-5">
   <div class="container">
      <div class="recent-work-header row text-center pb-5">
         <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">Recent Works</h2>
      </div>
      <div class="row gy-5 g-lg-5 mb-4">

         <!-- Start Recent work -->
         <div class="col-md-4 mb-3">
            <a href="{{ url('blood_donation') }}" class="recent-work card border-0 shadow-lg overflow-hidden">
               <img class="recent-work-img card-img" src="{{ URL::asset('img/gallery/blood_donation/3.jpg') }}" alt="Card image">
               <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                     <h3 class="card-title light-300">Blood Donation</h3>
                     <!-- <p class="card-text">Ullamco laboris nisi ut aliquip ex</p> -->
                  </div>
               </div>
            </a>
         </div><!-- End Recent work -->

         <!-- Start Recent work -->
         <div class="col-md-4 mb-3">
            <a href="{{ url('covid_relief') }}" class="recent-work card border-0 shadow-lg overflow-hidden">
               <img class="recent-work-img card-img" src="{{ URL::asset('img/gallery/covid_relief/1.jpg') }}" alt="Card image">
               <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                     <h3 class="card-title light-300">Covid Relief</h3>
                     <!-- <p class="card-text">Psum officia anim id est laborum.</p> -->
                  </div>
               </div>
            </a>
         </div><!-- End Recent work -->

         <!-- Start Recent work -->
         <div class="col-md-4 mb-3">
            <a href="{{ url('meet') }}" class="recent-work card border-0 shadow-lg overflow-hidden">
               <img class="recent-work-img card-img" src="{{ URL::asset('img/recent-works-03.jpg') }}" alt="Card image">
               <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                     <h3 class="card-title light-300">Meet</h3>
                     <!-- <p class="card-text">Sum dolor sit consencutur</p> -->
                  </div>
               </div>
            </a>
         </div><!-- End Recent work -->

         <!-- Start Recent work -->
         <div class="col-md-4 mb-3">
            <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
               <img class="recent-work-img card-img" src="{{ URL::asset('img/recent-works-04.jpg') }}" alt="Card image">
               <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                     <h3 class="card-title light-300">Public Relation</h3>
                     <!-- <p class="card-text">Lorem ipsum dolor sit amet</p> -->
                  </div>
               </div>
            </a>
         </div><!-- End Recent work -->

         <!-- Start Recent work -->
         <div class="col-md-4 mb-3">
            <a href="{{ url('track_distribution') }}" class="recent-work card border-0 shadow-lg overflow-hidden">
               <img class="recent-work-img card-img" src="{{ URL::asset('img/recent-works-05.jpg') }}" alt="Card image">
               <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                     <h3 class="card-title light-300">Donation</h3>
                     <!-- <p class="card-text">Put enim ad minim veniam</p> -->
                  </div>
               </div>
            </a>
         </div><!-- End Recent work -->

         <!-- Start Recent work -->
         <div class="col-md-4 mb-3">
            <a href="#" class="recent-work card border-0 shadow-lg overflow-hidden">
               <img class="recent-work-img card-img" src="{{ URL::asset('img/recent-works-06.jpg') }}" alt="Card image">
               <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                  <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                     <h3 class="card-title light-300">Award Ceremony</h3>
                     <!-- <p class="card-text">Mollit anim id est laborum.</p> -->
                  </div>
               </div>
            </a>
         </div><!-- End Recent work -->

      </div>
   </div>
</section>
<!-- End Recent work -->

<!-- Start Social Sites -->
<section class="py-2 mb-5">
   <div class="container bg-light pt-5">
      <div class="recent-work-header row text-center pb-5">
         <h2 class="col-md-6 m-auto h2 semi-bold-600 py-3">Follow Our Activities</h2>
      </div>

      <div class="row gy-5 g-lg-5 mb-4">

         <!-- Start Facebook -->
         <div class="col-lg-4 col-12">
            <section class="mb-5">
               <div class="container">
                  <div class="fb-page" data-href="https://www.facebook.com/odysseyynepal/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                     <blockquote cite="https://www.facebook.com/odysseyynepal/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/odysseyynepal/">Odyssey Nepal</a></blockquote>
                  </div>
               </div>
            </section>
         </div>
         <!-- End Facebook -->

         <!-- Start Twitter -->
         <div class="col-lg-4 col-12">
            <section class="mb-5">
               <div class="container">
                  <a class="twitter-timeline" href="https://twitter.com/NepalOdyssey?ref_src=twsrc%5Etfw">Tweets by NepalOdyssey</a>
                  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
               </div>
            </section>
         </div>
         <!-- End Twitter -->
         <!-- Start Instagram -->
         <div class="col-lg-4 col-12">
            <section class="mb-5">
               <div class="container">
                  <div class="embedsocial-hashtag" data-ref="8004188a39e95c63db3c49852d4ffe9562d0cec5"><a class="feed-powered-by-es" href="https://embedsocial.com/products/embedfeed/" target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span></a></div>
                  <script>
                     (function(d, s, id) {
                        var js;
                        if (d.getElementById(id)) {
                           return;
                        }
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "https://embedsocial.com/cdn/ht.js";
                        d.getElementsByTagName("head")[0].appendChild(js);
                     }(document, "script", "EmbedSocialHashtagScript"));
                  </script>
               </div>
            </section>
         </div>
         <!-- End Instagram -->
      </div>

   </div>
</section>
<!-- End Social Sites -->

@endsection