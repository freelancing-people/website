@extends('layouts.website')

@section('content')
    <section class="interview-view">
        <div class="container-fluid">
            <div class="col-sm-4">
                <div class="profile-details">
                    <div class="profile-image">
                        <img src="/assets/images/philip-morgan.jpg" alt="Philip Morgan">
                        <div class="profile-name">{{ $interview->name }}</div>
                    </div>
                    <div class="profile-body">
                        <ul class="list-unstyled">
                            <li>Intrino<br>Financial Data and Analytics Market</li>
                            <li>Revenue of $10k/mo</li>
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
                        {{ $interview->body }}
                    </div>
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                    <span class="line line-4"></span>
                </div>
            </div>
        </div>
        <div class="container">
            <a href="javascript:void(0)" class="next-btn">Next Interview</a>
        </div>
        <div class="triangle-bg">
        </div>
        <div class="triangle-bg rotate-bg">
        </div>
    </section>
@endsection