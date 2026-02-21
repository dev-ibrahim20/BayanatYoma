@extends('layouts.master')

@section('title', __('messages.logo'))

@section('content')
    @include('partials.hero')
    @include('partials.services')
    @include('partials.different')
    @include('partials.gallery')
    @include('partials.stats')
    @include('partials.contact')
    @include('partials.customers')
@endsection