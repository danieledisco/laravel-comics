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

    <div class="mainDown">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cardImage">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}">
                    </div>
                    <div class="cardName">
                        DIGITAL COMICS
                    </div>
                </div>
                <div class="col">
                    <div class="cardImage">
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}">
                    </div>
                    <div class="cardName">
                        DC MERCHANDISE
                    </div>

                </div>
                <div class="col">
                    <div class="cardImage">
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}">
                    </div>
                    <div class="cardName">
                        SUBSCRIPTION
                    </div>

                </div>

                <div class="col">
                    <div class="cardImage">
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}">
                    </div>
                    <div class="cardName">
                        COMIC SHOP LOCATOR
                    </div>

                </div>
                <div class="col">
                    <div class="cardImage">
                        <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}">

                    </div>
                    <div class="cardName">
                        DC POWER VISA
                    </div>

                </div>

            </div>

        </div>
    </div>
@endsection
