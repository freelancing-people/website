@extends('layouts.website')

@section('content')

<div class="container">
		<div class="search-section">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h1 class="text-center">Learn from profitable <br> businesses and side projects.</h1>
					<p>Subscribe to get new interviews in your inbox weekly!</p>
					<div class="container-fluid">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="form-group subscribe-group">
								<input class="form-control" type="email" name="email">
								<button>Subscribe</button> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="photo-section">
		<div class="container">
			<a href="javascript:void(0)" class="pull-right">Sort by recently added</a>
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
                                    <img src="{{ Storage::disk('interview')->url($interview->avatar) }}" alt="Kai Davis">
                                    <h3>{{ $interview->name }}</h3>
                                    <h4>Freelance Graphic Designer</h4>
                                </a>
                            </div>
                        </div>
                    @endforeach
				</div>
			</div>
		</div>
	</section>

@endsection