@extends('layouts.contact')

@section('title', '503')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ __('messages.503.message') }}</h2>
            <p>{{ __('messages.503.body') }}</p>
            <a href="{{ Config::get('app.home_url') }}"  class="btn btn-default btn-block">{{ __('messages.back') }}</a>
        </div>
    </div>
</div>
@endsection
