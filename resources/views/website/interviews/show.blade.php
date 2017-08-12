@extends('layouts.website')

@section('meta')
    <meta property="og:description" content="{{ $interview->shareable_description }}">
    <meta property="og:image" content="{{ Storage::disk('public')->url($interview->shareable_image) }}">

    <meta property="og:image:height" content="420">
    <meta property="og:image:width" content="840">
    <meta property="og:site_name" content="Freelancing People">
    <meta property="og:title" content="{{ $interview->name }} on Freelancing People">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->fullUrl() }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="{{ $interview->shareable_description }}">
    <meta name="twitter:image" content="{{ Storage::disk('public')->url($interview->shareable_image) }}">
    <meta name="twitter:site" content="@freelancingclub">
    <meta name="twitter:title" content="{{ $interview->name }} on Freelancing People">
@endsection

@section('content')
    <section class="interview-view">
        <div class="container-fluid">
            <article>
                <div class="col-sm-4">
                    <div class="profile-details">
                        <img src="{{ Storage::disk('public')->url($interview->avatar) }}" class="img-circle img-responsive center-block" alt="{{ $interview->name }}">
                        {{--<div class="profile-image">--}}
                        {{--<img src="{{ Storage::url($interview->avatar) }}" alt="Philip Morgan">--}}
                        {{--<div class="profile-name">{{ $interview->name }}</div>--}}
                        {{--</div>--}}
                        <div class="profile-body">
                            <ul class="list-unstyled">
                                <li>
                                    <i class="fa fa-user"></i> {{ $interview->name }}<br>
                                </li>
                                {{--<li>Revenue of $10k/mo</li>--}}
                                <li>
                                    <i class="fa fa-calendar"></i> Founded in {{ $interview->founded_in }}
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i> Based in the {{ $interview->based_in }}
                                </li>
                                <li>
                                    <i class="fa fa-users"></i> {{ $interview->founders }} Founders, {{ $interview->employees }} Employees
                                </li>
                                <li>
                                    <i class="fa fa-globe"></i> <a href="{{ $interview->website }}" target="_blank">{{ $interview->website }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="profile-info">
                        <div class="content">
                            {!! $interview->html_body !!}
                        </div>
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                        <span class="line line-4"></span>
                    </div>
                </div>
            </article>
        </div>
        <div class="container">
            <script async id="_ck_245203" src="https://forms.convertkit.com/245203?v=6"></script>
            {{--<a href="javascript:void(0)" class="next-btn">Next Interview</a>--}}
        </div>
        <div class="triangle-bg">
        </div>
        <div class="triangle-bg rotate-bg">
        </div>
    </section>
@endsection