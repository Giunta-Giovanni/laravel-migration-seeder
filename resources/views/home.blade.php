@extends('layouts.default_layout')
@section('page_title', 'Home')

@section('content')
<header class="text-center py-5 header-title">
    <h1>Vai ai nostri tabelloni</h1>
</header>

<main>
    <div class="container train-box text-center box-home">
        <ul class="list-unstyled">
            <li class="my-3">
                <a href="/departure" class="btn btn-outline-warning btn-custom">
                    Vai al tabellone delle partenze
                </a>
            </li>
            <li class="my-3">
                <a href="/arrival" class="btn btn-outline-warning btn-custom">
                    Vai al tabellone degli arrivi
                </a>
            </li>
        </ul>
    </div>
</main>
@endsection