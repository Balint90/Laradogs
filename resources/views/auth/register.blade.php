@extends('layouts.auth-master')

@section('content')
<div class="container mt-5 bg-secondary rounded pt-5">
    <div class="row justify-content-center">
        <div class="col-4">
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">

        {{-- <i class="fa-solid fa-dog text-light"></i> --}}
        
        <h1 class="h3 mb-3 fw-normal text-white">Regisztráció</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Név" required="required" autofocus>
            <label for="floatingName">Név</label>
            @if ($errors->has('name'))
                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Felhasználónév" required="required" autofocus>
            <label for="floatingName">Felhasználónév</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email cím</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Jelszó" required="required">
            <label for="floatingPassword">Jelszó</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Jelszó megerősítése" required="required">
            <label for="floatingConfirmPassword">Jelszó megerősítése</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Regisztráció</button>
        
        @include('auth.partials.copy')
    </form>
    </div>
    </div>
    </div>
@endsection