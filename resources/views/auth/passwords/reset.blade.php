@extends('layouts.guest')

@section('content')

<div class="section section-pad">
    <div class="container">
        <div class="tab-custom">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <h3 class="heading-lead center">{{ __('Reset Password') }}</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-signup" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="form-results"></div>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <div class="form-field form-m-bttm">
                                <input name="email" type="email" placeholder="Email *"
                                    class="form-control required email"  value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus/>
                            </div>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <input type="password" placeholder="Password *"
                                    class="form-control required"
                                    name="password" required autocomplete="new-password"/>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-field">
                                <input type="password" placeholder="{{ __('Confirm Password') }} *"
                                    class="form-control required"
                                    name="password_confirmation" required autocomplete="new-password"/>
                            </div>
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-alt btn-block">    {{ __('Reset Password') }}</button>
                        <span class="gaps"></span>
                    </form>
                </div>
            </div>
        </div>
        <div style="margin-top: 40px;"></div>
    </div>
</div>
@endsection
