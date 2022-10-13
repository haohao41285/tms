@extends('fe.pages.master')

@section('title')
    {{__('fe.menu.about-us')}}
@endsection

@push('meta_seo')
    <meta name="keywords" content="{{ __('fe.seo.about-us.keywords') ." - ". ENV('APP_NAME') }}" />
    <meta name="description" content="{{ __('fe.seo.about-us.description') ." - ". ENV('APP_NAME') }}" />
    <meta property="og:url" content="{{ route('fe.about-us') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{__('fe.menu.about-us')}}" />
    <meta property="og:description" content="{{ __('fe.seo.about-us.description') ." - ". ENV('APP_NAME') }}" />
@endpush

@push('css')
	<style>
		
	</style>
@endpush

@section('content')

    @include('fe.partials._banner-small', ['title' => __('fe.menu.about-us')])

	<div class="team">
		<div class="container"> 
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
		            <p class="sub_para_agile" data-aos="fade-up" data-aos-duration="1000">{{ __('fe.home.why.description') }}</p>
				</div>
			</div>
			<div class="agile_team_grids_top">
				<div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid" data-aos="fade-left" data-aos-duration="1000">
							<h3><i class="fa fa-check" aria-hidden="true"></i>{{ __('fe.about-us.advantages.advantage1.title') }}</h3>
							<p>{{ __('fe.about-us.advantages.advantage1.description') }}</p>
						</div>
						<div class="w3ls_courses_left_grid" data-aos="fade-left" data-aos-duration="1500">
							<h3><i class="fa fa-check" aria-hidden="true"></i>{{ __('fe.about-us.advantages.advantage2.title') }}</h3>
							<p>{{ __('fe.about-us.advantages.advantage2.description') }}</p>
						</div>
						<div class="w3ls_courses_left_grid" data-aos="fade-left" data-aos-duration="2000">
							<h3><i class="fa fa-check" aria-hidden="true"></i>{{ __('fe.about-us.advantages.advantage3.title') }}</h3>
							<p>{{ __('fe.about-us.advantages.advantage3.description') }}</p>
						</div>
						<div class="w3ls_courses_left_grid" data-aos="fade-left" data-aos-duration="2500">
							<h3><i class="fa fa-check" aria-hidden="true"></i>{{ __('fe.about-us.advantages.advantage4.title') }}</h3>
							<p>{{ __('fe.about-us.advantages.advantage4.description') }}</p>
						</div>
					</div>
					<a href="{{ route('fe.contact-us') }}" class="btn btn-contact" data-aos="fade-left" data-aos-duration="3000">
						<i class="fa  fa-envelope-o"></i>
						{{ __('fe.menu.contact-us') }}
					</a>
				</div>
				<div class="col-md-6 agileits_courses_right" data-aos="fade-right" data-aos-duration="1500">
					<img src="{{ asset('images/g2.jpg') }}" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="team">
		<div class="container"> 
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left" data-aos="fade-up" data-aos-duration="1000">
					<h3 class="w3l_header w3_agileits_header">{{ __('fe.about-us.our-technology.title') }}</h3>
		             <p class="sub_para_agile">{{ __('fe.about-us.our-technology.description') }}</p>

				</div>
			</div>
			<div class="agile_team_grids_top">
				<div class="col-md-6 w3l_stats_bottom_grid_left" data-aos="fade-right" data-aos-duration="2000">
					<img style="width: 100%" src="{{ asset('images/3.jpg') }}" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3l_stats_bottom_grid_right" data-aos="fade-left" data-aos-duration="2000">

					<img class="our-tech-icon" src="{{ asset('images/technology/bootstrap.png') }}" alt="">
					<img class="our-tech-icon" src="{{ asset('images/technology/laravel.png') }}" alt="">
					<img class="our-tech-icon" src="{{ asset('images/technology/php.png') }}" alt="">
					<img class="our-tech-icon" src="{{ asset('images/technology/cs-cart.png') }}" alt="">
					<img class="our-tech-icon" src="{{ asset('images/technology/vuejs.png') }}" alt="">
					<img class="our-tech-icon" src="{{ asset('images/technology/WordPress.png') }}" alt="">
					<img class="our-tech-icon" src="{{ asset('images/technology/jquery.png') }}" alt="">

					<p style="margin-top: 2em; font-style: italic;">"{{ __('fe.about-us.our-technology.more') }}"</p>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection

@push('js')

@endpush