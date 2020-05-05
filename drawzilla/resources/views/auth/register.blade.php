@extends('layouts.app')

@section('content')
    <div class="register-container d-flex align-items-center justify-content-center">
        <form method="POST" action="{{ route('register') }}" class="register-form text-center">
            @csrf

            <div class="title-name">
                <h1 class="mb-5 font-weigth-light">Register</h1>
            </div>
            <div class="form-group">
                <input type="text" name="firstname" class="no-border form-control @error('firstname') is-invalid @enderror" placeholder="{{ __('Firstname')}}" value="{{ old('firstname')}}" required>
                @error('firstname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" name="lastname" class="no-border form-control @error('lastname') is-invalid @enderror" placeholder="{{ __('Lastname')}}" value="{{ old('lastname') }}" required>
                @error('lastname')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" name="email" class="no-border form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-mail Address')}}" value="{{ old('email')}}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="no-border form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password')}}" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="no-border form-control" placeholder="{{ __('Confirm-password')}}" required autocomplete="new-password">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn no-border button">{{ __('Register') }}</button>
                <a class="btn button" href="{{ url('/') }}">{{ __('Cancel')}}</a>
            </div>
        </form>
    </div>

@endsection
