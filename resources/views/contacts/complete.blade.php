@extends('layouts.contact')

@section('title', __('messages.complete_contact'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ __('messages.complete_contact') }}</h2>

            <p>{{ __('messages.contact_receipt') }}</p>
            <table class="table">
                <tr>
                    <th>{{ __('messages.name') }}</th>
                    <td>{{ $data->name }}</td>
                </tr>
                <tr>
                    <th>{{ __('messages.email') }}</th>
                    <td>{{ $data->email }}</td>
                </tr>
                <tr>
                    <th>{{ __('messages.content') }}</th>
                    <td>{!! nl2br($data->body) !!}</td>
                </tr>
            </table>

            <a href="{{ Config::get('app.home_url') }}" class="btn btn-default btn-block">{{ __('messages.back') }}</a>
        </div>
    </div>
</div>
@endsection
