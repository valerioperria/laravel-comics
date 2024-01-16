@extends('layouts.app')

@section('content')
    <div id="jumbotron"></div>

    <section class="comics-part py-5">
        <div class="container">
            <div class="d-flex flex-wrap gap-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h5>{{ $comic['series'] }}</h5>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <button type="button" class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </section>

    <section class="main-menu">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center py-5 text-center">
                @foreach ($buy as $item)
                    <div class="col">
                        <img src="{{ Vite::asset($item['thumb']) }}" alt="">
                        <span>{{ $item['title'] }}</span>
                    </div>
                @endforeach
            </div>


        </div>
    </section>
@endsection
