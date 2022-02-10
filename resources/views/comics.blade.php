@extends('layouts.app')

@section('page-title')
   Comics
@endsection

@section('main_classes')
select_comics
@endsection

@section('main_content')
    <section class="main-section">
        <div class="container">
            <div class="elements_name">CURRENT SERIES</div>
            
            <div class="comics_container">
                @foreach ($comics_array as $singleComic)
                    <div class="single_comic">
                        <a href="{{ route('comic',['id'=>$singleComic['id']]) }}">
                            <img src="{{ $singleComic['thumb'] }}" alt="{{ $singleComic['title'] }}">
                            <h3>{{ $singleComic['title'] }}</h3>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection