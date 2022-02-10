@extends('layouts.app')

@section('main_color')
color
@endsection

@section('main_content')
    <div class="card_info container">
        <div class="image">
            <img src="{{ $card_info['thumb'] }}" alt="">
        </div>
        <h2>{{ $card_info['title'] }} </h2>
        <div class="price">
            <span>U.S. Price: {{ $card_info['price'] }}</span>
            <span>AVAILABLE</span>
            <span>Check it</span>
        </div>
        <div class="description">
            {{ $card_info['description'] }}
        </div>
        <div class="minicontainer">
            <div class="art">
                <h2>Artisti</h2>
                @foreach($art_info as $a)
                    <div>{{ $a }}</div>
                @endforeach
            </div>
            <div class="write">
                <h2>Write</h2>
                @foreach($write_info as $b)
                <div>{{ $b }}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection