@extends('layouts.app')
@section('content')
    <main>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <div class="title">
                            {{ $comic['series'] }}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="more">
                LOAD MORE
            </div>

        </div>
    </main>
@endsection
