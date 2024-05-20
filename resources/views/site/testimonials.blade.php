@extends('layouts.site')
@section('content')
<div class="page-title aos-init aos-animate" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Alumni</h1>
              <p class="mb-0">Welcome to the Mpandaguta Primary School alumni community - a network of successful graduates making an impact around the world.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Alumni</li>
          </ol>
        </div>
      </nav>
    </div>
		<section id="trainers" class="section trainers">

      <div class="container">

        <div class="row gy-5">

		@foreach($testimonials as $tst)
          <div class="col-lg-4 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>{{ $tst->fullname}}</h4>
              <span class="">Former Student</span>
              <p>{{ $tst->message}}</p>
            </div>
          </div><!-- End Team Member -->
		  @endforeach

        </div>

      </div>

    </section>

                    
                       
@endsection