<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        @include('partials.nav')

        <div class="jumbo">
            <div class="img-container-main">
                <img src="{{Vite::asset('resources/images/jumbotron.jpg')}}" alt="">
            </div>
        </div>
    
        <div class="container-main">
            <button class="btn-top">CURRENT SERIES</button>
            <div class="content-main">

                @foreach ($comics as $comic)
                <div class="card">
                    {{-- <div class="img-container"><img src="{{Vite::asset('resources/images/{{ $comic['thumb'] }}')}}" class="card-img"></div> --}}
                    <span>{{ $comic['title'] }}</span>
                </div>
                @endforeach
                
                <button class="btn-bottom">LOAD MORE</button>
            </div>
        </div>
        
        <div class="card-container">
            <ul>
                <li><img src="{{Vite::asset('resources/images/buy-comics-digital-comics.png')}}" alt=""> <span>DIGITAL COMICS</span> </li>
                <li><img src="{{Vite::asset('resources/images/buy-comics-merchandise.png')}}" alt=""> <span>DC MERCHANDISE</span></li>
                <li><img src="{{Vite::asset('resources/images/buy-comics-shop-locator.png')}}" alt=""> <span>SUBSCRIPTION</span></li>
                <li><img src="{{Vite::asset('resources/images/buy-comics-subscriptions.png')}}" alt=""> <span>COMIC SHOP LOCATOR</span></li>
                <li><img src="{{Vite::asset('resources/images/buy-dc-power-visa.svg" ')}}" class="visa" alt=""> <span>DC POWER VISA</span></li>
            </ul>
        </div>



        @include('partials.foot')
    </body>
</html>
