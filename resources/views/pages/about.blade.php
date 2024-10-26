@extends('layouts.master')

@section('title', 'About')

@section('page-title', 'About')

@section('content')

    @include('partials.pagebanner')
    @include('partials.about')
    @include('partials.counter')
    @include('partials.upcomingposters')
    @include('partials.speakers')


@endsection
