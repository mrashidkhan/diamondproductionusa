@extends('layouts.master')

@section('title', 'Home')

@section('page-title', 'Home')

@section('content')

    @include('partials.slider')
    @include('partials.about')
    @include('partials.counter')
    @include('partials.upcomingposters')
    @include('partials.speakers')
    @include('partials.posters')
    {{-- @include('partials.eventschedule')
    @include('partials.pricing')
    @include('partials.eventsponsors')
    @include('partials.blog')
    @include('partials.gallery') --}}

@endsection
