@extends('layout')

@section('main')



		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('web/img/home-background.jpg')}})"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">{{ __('web.heroTitle') }}</h1>
							<p class="lead white-text">{{ __('web.heroDesc') }}</p>
							<a class="main-button icon-button" href="#">{{ __('web.getStartedBtn') }}</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
					<div class="section-header text-center">
						<h2>{{ __('web.popularExamTitle') }}</h2>
						<p class="lead">{{ __('web.popularExamDesc') }}</p>
					</div>
				</div>
				<!-- /row -->

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam1.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
								<div class="course-details">
									<span class="course-category">Design</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam2.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Introduction to CSS </a>
								<div class="course-details">
									<span class="course-category">Programming</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam3.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">The Ultimate Drawing Course | From Beginner To Advanced</a>
								<div class="course-details">
									<span class="course-category">Drawing</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam4.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">The Complete Web Development Course</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam5.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">PHP Tips, Tricks, and Techniques</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam6.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">All You Need To Know About Programming</a>
								<div class="course-details">
									<span class="course-category">Programming</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam7.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">How to Get Started in Photography</a>
								<div class="course-details">
									<span class="course-category">Photography</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="{{asset('uploads/exams/exam8.jpg')}}" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Typography From A to Z</a>
								<div class="course-details">
									<span class="course-category">Typography</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="#">{{ __('web.moreExamsBtn') }}</a>
					</div>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->



		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('web/img/cta.jpg')}})"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">{{ __('web.contact') }}</h2>
						<p class="lead white-text">{{ __('web.contactDesc') }}</p>
						<a class="main-button icon-button" href="contact.html">{{ __('web.contactBtn') }}</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->



@endsection
