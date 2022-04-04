@extends('master')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/')}}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us spad">
        <div class="container">
        <div class="row">
			<div class="col-md-6">
				<div class="content-section">
					<div class="title">
						<h1>Ogani Shop</h1>
					</div>
					<div class="content">
						<h3>Ogani is an e-commerce in Southeast Asia</h3>
						<p>Launched in 2015, the Electron commerce platform was built to provide users with an easy, secure and fast experience when shopping online through strong payment support and operating system.
							We strongly believe that the online shopping experience should be simple, easy and emotionally pleasurable. This belief inspires and drives us every day at Electron.</p>

						<hr>
						<h3>Goal Our</h3>
						<p>We truly believe in the unfolding power of technology and wish to contribute to making the world a better place by connecting the community of buyers and sellers by providing an e-commerce platform. death.</p>

						<hr>
						<h3>Our Personality</h3>
						<p>To define who we are - through words or behavior in many different situations - we are, in essence, Close, Happy, and Agreed. These are the main and outstanding features in each step of Electron's development.</p>

						<hr>
						<h3>Consent</h3>
						<p>We love spending time together like enjoying online shopping with family and friends - doing the things we love together like one big family.</p>
					</div>
					<br>
				</div>
			</div>
			<div class="col-md-6">
			<div class="image-section ">
				<img src="{{ asset('/img/about-us.jpeg')}}" class="img-thumbnail" alt="" width="100%" height="300">
			</div>
		</div>

        </div>
    </section>
    <!-- About Us Section End -->

    @endsection