@extends('layouts.main_layout')

@section('title', 'Blog Page')
@section('description', $settings -> decsription)
@section('keywords', $settings -> keywords)
@section('icon', Storage::url($settings -> icon))

@section('slider')
    @include('home.slider')
@endsection

@section('content')

@endsection
