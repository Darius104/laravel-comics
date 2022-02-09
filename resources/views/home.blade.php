@extends('layouts.app')

@section('page_title')
    Comic Page
@endsection

@section('main_content')
    <section>
        <div class = "product-list container">
            <h2>CURRENT SERIES</h2>
            <div class="list">
                @foreach ($key as $item)
                    <div class="card">
                        <img src="{{ $item['thumb'] }}" alt="">
                        <h3>{{ $item['series'] }}</h3>
                    </div> 
                @endforeach
            </div>
        </div>
    </section>
@endsection