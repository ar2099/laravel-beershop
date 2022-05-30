@extends('layouts.layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mastro birraio</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <div id="container">
        <header>
            <div class="logo">
                <i class="fa-solid fa-beer-mug-empty"></i>
            </div>
            <div class="title">
                <h1>Mastro birraio</h1>
            </div>
        </header>
        <main>
            <div class="beercontainer">
                @foreach ($beers as $elm)
                    <div class="beer">
                        <div class="text">
                            <h2>{{ $elm['nome'] }}</h2>
                            <h3>{{ $elm['descrizione'] }} di tipo {{ $elm['tipo'] }}</h3>
                            <p><span>Provenienza:</span> {{ $elm['paese_di_provenienza'] }}</p>
                            <p><span>Gradazione:</span> {{ $elm['gradazione_alcolica'] }}%</p>
                            <p><span>Quantità:</span> {{ $elm['quantità'] }}</p>
                            <p><span>Volume:</span> {{ $elm['volume'] }}</p>

                        </div>
                        <div class="img">
                            <div class="overlay"><i class="fa-solid fa-cart-shopping"></i></div>
                            <img src="{{ $elm['url'] }}" alt="{{ $elm['nome'] }}">
                        </div>
                        <div class="price">
                            <p>{{ $elm['prezzo'] }}€</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>
</body>

</html>
