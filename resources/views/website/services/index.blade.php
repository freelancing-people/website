
@extends('layouts.website')

@section('content')

	<section class="services-section">
		<div class="list-view">
			<div class="list-header">
				<h1>Services to Help Your Software Business</h1>
				<p>For your convenience, I'm offering my best consulting services as low-risk, fixed-price packages. If you didn't find a package to meet your needs, drop me a line at <a href="mailto:jane@uibreakfast.com">jane@uibreakfast.com</a> to discuss a custom engagement.</p>
			</div>
			<div class="list-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="list-box">
							<h2>60-Minute Strategy Call</h2>
							<p>Want to make sure youʼre heading in the right direction before your build anything big? Need a quick UI/UX teardown of your product? Canʼt figure out the next steps? Iʼm here to help with this laser-focused strategy call.</p>
							<button class="service-btn">CURRENT COSTS $895. EMAIL ME TO GET STARTED</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="list-box">
							<h2>Single Feature Optimization</h2>
							<p>Sometimes you only need help in one problematic area of your web application. This package was developed specifically for such situations, when we can achieve a quick win with a bit of actual design work (not just recommendations). For the best results, it comes with a complimentary 60-minute strategy call.</p>
							<button class="service-btn"> CURRENT  COSTS $895. EMAIL ME TO GET STARTED</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="list-box">
							<h2>Custom UI Audit</h2>
							<p>In this UI audit, Iʼll take a fresh professional look at your web app, determine critical design flaws, and put together an actionable plan for improving your UI/UX. Youʼll get a fancy (and incredibly useful) PDF report with a detailed screen-by-screen teardown of your web app.</p>
							<button class="service-btn" data-id="">CURRENT COSTS $895. EMAIL ME TO GET STARTED</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="list-box">
							<h2>Custom UI/UX Design</h2>
							<p>For larger projects, we get together for a few days (typically 2-5) and design your application screen-by-screen, starting with wireframes and finishing off with high-fidelity layouts if necessary.</p>
							<button class="service-btn">CURRENT COSTS $895. EMAIL ME TO GET STARTED</button>
						</div>
					</div>
				</div>
			</div>
			<div class="list-footer"></div>
			<span class="line line-1"></span>
		</div>
	</section>

	<div class="fp-modal">
		<button class="close-btn">&times;</button>
		<div class="fp-modal-backdrop"></div>
		<div class="fp-modal-content">
			<h1>60-Minute Strategy Call</h1>
			<form id="fp-form">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="NAME:">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="E MAIL:">
				</div>
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="PHONE NUMBER:">
				</div>
				<div class="form-group">
					<textarea name="message" class="form-control" placeholder="MESSAGE:"></textarea>
				</div>
				<div class="form-group">
					<button class="fp-modal-btn">SUBMIT</button>
				</div>
			</form>
		</div>
	</div>

@endsection