@extends('layouts.app')

@section('content')
    @include('components.hero')
    @include('components.about')
    @include('components.fact')
    @include('components.skill')
    @include('components.resume')

    @include('components.service')
    @include('components.testimonial')
    @include('components.contact')
@endsection
