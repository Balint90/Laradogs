@extends('layouts.auth-master')

@section('content')
<div class="container mt-5 bg-secondary rounded pt-5">
    <div class="row justify-content-center">
        <div class="col-4">
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">
        
        {{-- <i class="fa-solid fa-dog text-light"></i> --}}
        
        <h1 class="h3 mb-3 fw-normal text-white">Bejelentkezés</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input id="floatingName" type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email vagy Felhasználónév</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input id="floatingPassword" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Jelszó</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Bejelentkezés</button>
        
        @include('auth.partials.copy')
    </form>
    </div>
    </div>
    </div>
@endsection