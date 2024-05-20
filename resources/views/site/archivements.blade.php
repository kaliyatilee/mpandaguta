@extends('layouts.site')
@section('content')
<div class="page-title aos-init aos-animate" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Events</h1>
              <p class="mb-0">Mpandaguta Archivements.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Archivements</li>
          </ol>
        </div>
      </nav>
    </div>

<section id="events" class="events section">

      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">
		@foreach($archivement as $nt)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ $nt->img_url }}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{ $nt->title}}</a></h5>
                <p class="fst-italic text-center">{{ $nt->date}}</p>
                <p class="card-text">{{ $nt->description}}</p>
              </div>
            </div>
          </div>
		  @endforeach
        
        </div>

      </div>

    </section>
                     
@endsection