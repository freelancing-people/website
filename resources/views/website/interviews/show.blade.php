@extends('layouts.website')

@section('content')
    <section class="interview-view">
        <div class="container-fluid">
            <div class="col-sm-4">
                <div class="profile-details">
                    <img src="{{ Storage::disk('public')->url($interview->avatar) }}" class="img-circle img-responsive center-block" alt="{{ $interview->name }}">
                    {{--<div class="profile-image">--}}
                        {{--<img src="{{ Storage::url($interview->avatar) }}" alt="Philip Morgan">--}}
                        {{--<div class="profile-name">{{ $interview->name }}</div>--}}
                    {{--</div>--}}
                    <div class="profile-body">
                        <ul class="list-unstyled">
                            <li>{{ $interview->name }}<br></li>
                            {{--<li>Revenue of $10k/mo</li>--}}
                            <li>Founded in {{ $interview->founded_in }}</li>
                            <li>Based in the {{ $interview->based_in }}</li>
                            <li>{{ $interview->founders }} Founders, {{ $interview->employees }} Employees</li>
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