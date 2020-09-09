@extends('layouts.contact')

@section('title', __('messages.contact'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>{{ __('messages.contact') }}</h2>

            <form class="form-horizontal" method="POST" action="{!! url('/complete') !!}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-2 control-label">{{ __('messages.name') }}</label>

                    <div class="col-md-10">
                        <input id="name" type="input" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-2 control-label">{{ __('messages.email') }}</label>

                    <div class="col-md-10">
                        <input id="email" type="input" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                    <label for="body" class="col-md-2 control-label">{{ __('messages.content') }}</label>

                    <div class="col-md-10">
                        <textarea id="body" class="form-control" name="body" rows="4">{{ old('body') }}</textarea>

                        @if ($errors->has('body'))
                        <span class="help-block">
                            <strong>{{ $errors->first('body') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block">{{ __('messages.submit')  }}</button>

                <a href="{{ Config::get('app.home_url') }}" class="btn btn-default btn-block">{{ __('messages.back') }}</a>
        
            </form>
        </div>
    </div>
</div>
@endsection
