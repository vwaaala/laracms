@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Demo Login') }}</div>

                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Role</th>
                                <th>Login</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="align-middle">
                                <td>1.</td>
                                <td>Admin</td>
                                <td><button class="btn btn-sm btn-danger">Sign in</button></td>
                            </tr>
                            <tr class="align-middle">
                                <td>2.</td>
                                <td>Editor</td>
                                <td><button class="btn btn-sm btn-success">Sign in</button></td>
                            </tr>
                            <tr class="align-middle">
                                <td>3.</td>
                                <td>Author</td>
                                <td><button class="btn btn-sm btn-warning">Sign in</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form name="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script>
    const adminEmail = 'admin@bunk3r.net';
    const editorEmail = 'editor@bunk3r.net';
    const authorEmail = 'author@bunk3r.net';
    const password = 'secret';
    const form = document.forms["loginForm"];

    const admin = document.getElementsByClassName('admin');
    admin.on('click', function () {
        demoLogin(adminEmail)
    })
    function demoLogin(email){
        form["email"].value = email;
        form["password"].value = password;
        form.submit();
    }
</script>
@endpush
