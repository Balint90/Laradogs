@extends('layouts.app-master')

@section('content')
    <div class="bg-secondary text-light mt-3 p-5 rounded">
        @auth
        <h1>Irányítópult</h1>
        <p class="lead">Csak a bejelentkezett felhasználók láthatják ezt a szekciót.</p>
        {{-- <a class="btn btn-lg btn-success" href="" role="button"> --}}
            <form method="post" action="{{ route('generateToken') }}">
                {{ csrf_field() }}
                <button class="btn btn-lg btn-primary" type="submit">Token generálása &raquo;
                </button>
            </form>
        {{-- </a> --}}
        {{-- <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a> --}}
        @endauth

        @guest
        <h1>Főoldal</h1>
        <p class="lead">Ön most a főoldalon tartózkodik. Kérem jelentkezzen be a regisztrációhoz kötött szolgáltatások megjelenítéséhez.</p>
        @endguest
    </div>
@endsection