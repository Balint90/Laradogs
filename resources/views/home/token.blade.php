@extends('layouts.app-master')

@section('content')
    <div class="bg-secondary p-5 rounded">
        @auth
        <h1>Tokengenerálás</h1>
        <p class="lead"></p>
        <a class="btn btn-lg btn-primary" href="" role="button">Token generálása &raquo;</a>
        {{-- <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a> --}}
        @endauth

        @guest
        <h1>Tokengenerálás</h1>
        <p class="lead">Kérem jelentkezzen be a tokengeneráláshoz.</p>
        @endguest
    </div>
@endsection