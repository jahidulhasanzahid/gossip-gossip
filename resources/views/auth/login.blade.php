@extends('layouts.app')

@section('content')

<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="page-title">
                    <h1>Login</h1>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="login-form-email">E-mail</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="login-form-password">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="pull-left">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>

                </form>
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->

    </div><!-- /.content -->
</div>

@endsection
