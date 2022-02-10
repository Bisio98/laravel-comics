@extends('layouts.app')

@section('page-title')
   Comics
@endsection

@section('main_content')
    <section class="main-section">
        <div class="container">
            <div class="elements_name">CURRENT SERIES</div>
            
            <div class="comics_container">
                @foreach ($comics_array as $singleComic)
                    <div class="single_comic">
                        <img src="{{ $singleComic['thumb'] }}" alt="{{ $singleComic['title'] }}">
                        <h3>{{ $singleComic['title'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection