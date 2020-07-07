@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
    <div class="content">



        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="page-title">
                    <h1>Register</h1>
                </div><!-- /.page-title -->

                <form method="post" action="http://preview.byaviators.com/template/superlist/register.html?">
                    <div class="form-group">
                        <label for="login-form-email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="login-form-email">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="login-form-first-name">First name</label>
                        <input type="text" class="form-control" name="first_name" id="login-form-first-name">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="login-form-last-name">Last name</label>
                        <input type="text" class="form-control" name="last_name" id="login-form-last-name">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="login-form-password">Password</label>
                        <input type="password" class="form-control" name="password" id="login-form-password">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="login-form-password-retype">Retype password</label>
                        <input type="password" class="form-control" name="password-retype"
                            id="login-form-password-retype">
                    </div><!-- /.form-group -->

                    <button type="submit" class="btn btn-primary pull-right">Register</button>
                </form>
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->

    </div><!-- /.content -->
</div><!-- /.container -->
@endsection
