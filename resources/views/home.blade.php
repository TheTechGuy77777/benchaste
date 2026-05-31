@extends('layouts.app')

@section('title', 'Benchaste — Premium Landscaping & Outdoor Living')
@section('meta_description',
    'Premium landscaping, garden design, and outdoor living transformations. Get your free
    quote today.')

@section('content')
    @include('partials.home.hero')
    @include('partials.home.services')
    @include('partials.home.shop')
    @include('partials.home.about')
    @include('partials.home.portfolio')
    @include('partials.home.why-us')
    @include('partials.home.testimonials')
    @include('partials.home.process')
    @include('partials.home.cta')
    @include('partials.home.contact')
@endsection
