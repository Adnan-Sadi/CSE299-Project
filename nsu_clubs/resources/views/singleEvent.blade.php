<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EVENT</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="shortcut icon" href="{{ asset('images/Home/mortarboard.png') }}"/>


    <!-- Main Style -->
    <link href="{{ asset('css/singleEventStyles.css') }}" rel="stylesheet">

	  <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/8aa2fd0685.js" crossorigin="anonymous"></script>

    <!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  </head>
  <body>

	@extends('layouts.layout1')
	@section('content')

	<!-- Start Event Heading Section  -->
	<div id="single-event-main" role="banner" style="background-image: url('{{ asset('images/Event Covers/' . $event->cover_photo) }}');" >


		<div class="single-event-main-overlay">
			<div class="container">
				<div class="single-event-main-area">
					<div class="single-event-main-featured-area">
						<!-- Start center Logo -->
						<div class="single-event-main-logo-area">
							<a class="single-event-main-logo" href="/home/{{ $event->clubs->id }}">{{ $event->clubs->club_initial }}</a>
						</div>
						<!-- End center Logo -->

						<div class="single-event-main-featured-content">

							<h1>{{ $event->event_name }}</h1>

							<p class="single-event-timeline">
								{{ $event->event_date->format('d') }}
								{{ $event->event_date->format('F') }},
								{{ $event->event_date->format('Y') }}.
								From {{ $event->start_at }} to {{ $event->end_at }}</p>
							<p class="background-extender">Hello</p>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Event Heading Section  -->

	<!-- Start About Section -->
		<section id="single-event-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="single-event-about-area">

							<div class="row">
								<div class="col-md-6">
									<div class="single-event-about-left">
										<img class="AboutImage" src="{{ asset('images/Event Photos/' . $event->about_image) }}" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-event-about-right">
										<h2>About The Event

										@if (Auth::user())
										<!-- Follow Event Button -->
										@if (!$follows->isEmpty())
										<button type="button" class="btn btn-outline-danger btn-sm unfollow_event" id="follow_event_{{ $event->event_id }}" data="{{ $event->event_id }}"><i class="fas fa-times-circle"></i> Follow</button><br>
										@else
											<button type="button" class="btn btn-outline-success btn-sm follow_event" id="follow_event_{{ $event->event_id }}" data="{{ $event->event_id }}"><i class="fas fa-check-circle"></i> Follow</button><br>
										@endif
										<!-- Follow Event Button -->
										@endif

										</h2>
										<p class="eventDescription"> {{ $event->event_description }}</p>

									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Section -->

		<!-- Start Parallax -->
		<section id="single-event-parallex" style="background-image: url('{{ asset('images/Event Covers/' . $event->cover_photo) }}');">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="single-event-parallex-area">

								<p class="single-event-parallex-play-btn">Join us Today !</p>

							</div>
						</div>
					</div>
				</div>


		</section>
		<!-- End Parallax -->

		<!-- Start Image Slider Section -->
		<section id="single-event-image-gallery">
			<div class="rotatingGallery-parentContainer">
				<div class="rotatingGallery">
					<div class="rotatingGallery-slides">

					@php
						$count=0;
					@endphp

					@foreach ($photos as $photo)

						@php
							$count=$count+1;
						@endphp

						<div class="rotatingGallery-slide" data-arrival-index="{{ $count }}">
						<img class="rotatingGallery-image" alt="" src="{{ asset('images/Event Photos/'.$photo->path) }}" title="">

						<!-- Check if user is club admin -->
						@if ($manages == 1)

						<div  class="container text-center">
							<form id="form-1" action="/event/{{ $photo->p_id }}/photo" method="POST">
                            @csrf
                            @method('delete')
							<button type="submit" id="imageRemove" class="btn btn-dark" name="{{ $photo->p_id }}"><i class="fas fa-trash"></i> remove</button>
							</form>
						</div>

						@endif

					</div>

					@endforeach

					</div>
				</div>
			</div>
		</section>
		<!-- End Image Slider Section -->

		<!-- Start Venue Section -->
		<section id="single-event-venue">
			<div class="single-event-venue-area">
				<div class="row">

					<div class="col-md-6">
						<div class="single-event-venue-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.09797357756!2d90.42336425074429!3d23.815114892141736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth%20South%20University!5e0!3m2!1sen!2sbd!4v1626370093430!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>
					</div>

					<div class="col-md-6">
						<div class="single-event-venue-address">
							<h2>VENUE <i class="fa fa-chevron-right" aria-hidden="true"></i></h2>
							<h3>North South University</h3>
							<h4>Bashundhara, Dhaka-1229, Bangladesh</h4>
							<p>North South University is a private university based in Dhaka, Bangladesh. Its business school is the first Bangladeshi university to receive American accreditation from the ACBSP in 2015.</p>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Venue Section -->

    <div style="opacity:0;font-size:4px;">k</div>


    <!-- jQuery library Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('js/singelEventScript.js') }}"></script>
	<script src="{{ asset('js/allEventScript.js') }}"></script>
@endsection
  </body>
</html>
