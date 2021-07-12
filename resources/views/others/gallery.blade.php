@extends('layouts.app')

@section ('content')

<!-- Start Banner Hero -->
<div id="work_banner" class="banner-wrapper bg-light w-100 py-5" style="height: 420px">
	<div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0" style="animation: transitionIn 2s; background: rgb(73 68 68 / 33%)">
		<div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
			<h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Work</h1>
            <!-- <h3 class="h4 pb-2 regular-400">Elit, sed do eiusmod tempor incididunt</h3>
            <p class="banner-body pb-2 light-300">
                Vector illustration <a class="text-white" href="http://freepik.com/" target="_blank">Freepik</a>.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                commodo viverra maecenas accumsan lacus.
            </p>
            <a class="btn rounded-pill btn-outline-light px-4 me-4 light-300" href="#">Learn More</a>
            <a class="btn rounded-pill btn-secondary text-light px-4 light-300" href="contact.php">Contact Us</a> -->

        </div>
    </div>
</div>
<!-- End Banner Hero -->

<!-- Start Our work -->
<section class="container py-5">
	<h2 class="col-md-6 m-auto h2 semi-bold-600 py-5 text-center">See Our Gallery</h2>
    <!-- <div class="row justify-content-center my-5">
        <div class="filter-btns shadow-md rounded-pill text-center col-auto">
            <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
            <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".business" href="#">Community</a>
            <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".marketing" href="#">Donations</a>
            <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".social" href="#">Exploration</a>
            <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".graphic" href="#">Relations</a>
        </div>
    </div> -->

    <div class="row projects gx-lg-5 py-5">
    	<a href="./works/stationary-distribution.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
    		<div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
    			<img class="card-img-top" src="{{ URL::asset('img/gallery/stationary_distribution/1.jpg') }}" alt="...">
    			<div class="card-body">
    				<h5 class="card-title light-300 text-dark">Stationary Materials Distribution</h5>
    				<p class="card-text light-300 text-dark">
    					Stationary Materials distribution to Children of Chulachuli-1, Ilam, Nepal. 2020 A.D.
    				</p>
    				<span class="text-decoration-none text-primary light-300">
    					Read more <i class='bx bxs-hand-right ms-1'></i>
    				</span>
    			</div>
    		</div>
    	</a>

    	<a href="works/blood-donation.php" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
    		<div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
    			<img class="card-img-top" src="{{ URL::asset('img/gallery/blood_donation/3.jpg') }}" alt="...">
    			<div class="card-body">
    				<h5 class="card-title light-300 text-dark">Blood Donation</h5>
    				<p class="card-text light-300 text-dark">
    					Yearly blood donation program organized by Odyssey Nepal. 2020 A.D.
    				</p>
    				<span class="text-decoration-none text-primary light-300">
    					Read more <i class='bx bxs-hand-right ms-1'></i>
    				</span>
    			</div>
    		</div>
    	</a>

    	<a href="works/track-distribution.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
    		<div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
    			<img class="card-img-top" src="{{ URL::asset('img/gallery/track_distribution/3.jpg') }}" alt="...">
    			<div class="card-body">
    				<h5 class="card-title light-300 text-dark">Distribution Program</h5>
    				<p class="card-text light-300 text-dark">
    					Sweater and Track Suit distribution program to maoist war affected children at Ekakrit Srijansil
    					Samaj, Manamaiju, Kathmandu. 2016 A.D.
    				</p>
    				<span class="text-decoration-none text-primary light-300">
    					Read more <i class='bx bxs-hand-right ms-1'></i>
    				</span>
    			</div>
    		</div>
    	</a>

    	<a href="works/covid-relief.php" class="col-sm-6 col-lg-4 text-decoration-none project social business">
    		<div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
    			<img class="card-img-top" src="{{ URL::asset('img/gallery/covid_relief/1.jpg') }}" alt="...">
    			<div class="card-body">
    				<h5 class="card-title light-300 text-dark">Covid Relief</h5>
    				<p class="card-text light-300 text-dark">
    					Food Materials Distribution to Covid-19 relief fund Initiated by Tokha Municipality. 2020 A.D.
    				</p>
    				<span class="text-decoration-none text-primary light-300">
    					Read more <i class='bx bxs-hand-right ms-1'></i>
    				</span>
    			</div>
    		</div>
    	</a>

    	<a href="works/meet.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing">
    		<div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
    			<img class="card-img-top" src="{{ URL::asset('img/gallery/meet/1.jpg') }}" alt="...">
    			<div class="card-body">
    				<h5 class="card-title light-300 text-dark">Meet</h5>
    				<p class="card-text light-300 text-dark">
    					Odyssey Nepal member Meet 2021 A.D.
    				</p>
    				<span class="text-decoration-none text-primary light-300">
    					Read more <i class='bx bxs-hand-right ms-1'></i>
    				</span>
    			</div>
    		</div>
    	</a>

    	<a href="works/fan-distribution.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic">
    		<div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
    			<img class="card-img-top" src="{{ URL::asset('img/gallery/fan_distribution/1.jpg') }}" alt="...">
    			<div class="card-body">
    				<h5 class="card-title light-300 text-dark">Fan Distribution</h5>
    				<p class="card-text light-300 text-dark">
    					Fan Distribution to Old Homage Situated at Chitwan, Devghat. 2019 A.D.
    				</p>
    				<span class="text-decoration-none text-primary light-300">
    					Read more <i class='bx bxs-hand-right ms-1'></i>
    				</span>
    			</div>
    		</div>
    	</a>

    </div>
    
    <div class="row">
    	<div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
    		<div class="btn-group me-2" role="group" aria-label="First group">
    			<button type="button" class="btn btn-secondary text-white">Previous</button>
    		</div>
    		<div class="btn-group me-2" role="group" aria-label="Second group">
    			<button type="button" class="btn btn-light">1</button>
    		</div>
    		<div class="btn-group me-2" role="group" aria-label="Second group">
    			<button type="button" class="btn btn-secondary text-white">2</button>
    		</div>
    		<div class="btn-group" role="group" aria-label="Third group">
    			<button type="button" class="btn btn-secondary text-white">Next</button>
    		</div>
    	</div>
    </div>
</section>
<!-- End Our work -->

<!-- Start Feature work -->
<section class="bg-light py-5">
	<div class="feature-work container my-4">
		<div class="row d-flex d-flex align-items-center">
			<div class="col-lg-5">
				<h3 class="feature-work-title h4 text-muted light-300">Featured work</h3>
				<h1 class="feature-work-heading h2 py-3 semi-bold-600">Transform with us</h1>
				<p class="feature-work-body text-muted light-300">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
					ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
				</p>
				<p class="feature-work-footer text-muted light-300">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="col-lg-6 offset-lg-1 align-left">
				<div class="row">
					<a class="col" data-type="image" data-fslightbox="work" href="./assets/img/works/our-work-01.jpg">
						<img class="img-fluid" src="{{ URL::asset('img/works/our-work-03.jpg') }}">
					</a>
					<a class="col" data-type="image" data-fslightbox="work" href="./assets/img/works/our-work-06.jpg">
						<img class="img-fluid" src="{{ URL::asset('img/works/our-work-06.jpg') }}">
					</a>
				</div>
				<div class="row pt-4">
					<a class="col" data-type="image" data-fslightbox="work" href="./assets/img/works/our-work-05.jpg">
						<img class="img-fluid" src="{{ URL::asset('img/works/our-work-05.jpg') }}">
					</a>
					<a class="col" data-type="image" data-fslightbox="work" href="./assets/img/works/our-work-07.jpg">
						<img class="img-fluid" src="{{ URL::asset('img/works/our-work-07.jpg') }}">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Feature work -->


@endsection