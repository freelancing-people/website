@extends('layouts.website')

@section('meta')
    <meta property="og:description" content="Learn from profitable freelancers and agencies">
    <meta property="og:image" content="/images/freelancing-people-shareable.png">

    <meta property="og:image:height" content="420">
    <meta property="og:image:width" content="840">
    <meta property="og:site_name" content="Freelancing People">
    <meta property="og:title" content="Freelancing People">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://freelancingpeople.com">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="Learn from profitable freelancers and agencies">
    <meta name="twitter:image" content="/images/freelancing-people-shareable.png">
    <meta name="twitter:site" content="@freelancingclub">
    <meta name="twitter:title" content="Freelancing People">
@endsection

@section('content')

<div class="container">
		<div class="search-section">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h1 class="text-center">Learn from profitable <br> freelancers and agencies.</h1>
					<p>Subscribe to get new interviews in your inbox weekly!</p>
					<script async id="_ck_245203" src="https://forms.convertkit.com/245203?v=6"></script>
					{{--<div class="container-fluid">--}}
						{{--<div class="col-sm-10 col-sm-offset-1">--}}
							{{--<div class="form-group subscribe-group">--}}
								{{--<input class="form-control" type="email" name="email">--}}
								{{--<button>Subscribe</button> --}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
				</div>
			</div>
		</div>
	</div>

	<section class="photo-section">
		<div class="container">
			{{--<a href="javascript:void(0)" class="pull-right">Sort by recently added</a>--}}
			<span class="line line-1"></span>
			<span class="line line-2"></span>
			<span class="line line-3"></span>
			<span class="line line-4"></span>
			<span class="line line-5"></span>
			<span class="line line-6"></span>
			<span class="line line-7"></span>
			<span class="line line-8"></span>
			<div class="grid-container">
				<div class="row">
					@foreach($interviews as $interview)
                        <div class="col-sm-4">
                            <div class="photo-grid triangle-border">
                                <a href="/interviews/{{ $interview->slug }}">
                                    <img src="{{ Storage::disk('public')->url($interview->avatar) }}" alt="{{ $interview->name }}">
                                    <h3>{{ $interview->name }}</h3>
                                    <h4>{{ $interview->introduction }}</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>

@endsection