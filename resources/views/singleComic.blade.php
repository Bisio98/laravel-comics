@extends('layouts.app')

@section('page-title')
   Comics
@endsection

@section('main_classes')
white_background
@endsection

@section('main_content')
    <section class="main-section">
        <div class="blue-line">
            <img src="{{ $comic_info['thumb'] }}" alt="{{$comic_info['title']}}">
        </div>
        <div class="white">
            <h2>{{$comic_info['title']}}</h2>
            <div class="left">
                <div class="price">
                    <span>U.S. Price{{$comic_info['price']}}</span>
                    <span>AVAIABLE</span>
                </div>
                <div class="availability">
                    <span>Check avaiability</span>
                </div>
                <p>{{ $comic_info['description'] }}</p>
            </div>
            <div class="right">
                <img src="/images/adv.jpg" alt="">
            </div>
        </div>
        <div class="gray">
            <div class="left">
                <h4>Talent</h4>
                <div class="line"></div>
                <div>Art by:
                    @foreach ($comic_info['artists'] as $artist)
                    <span>{{$artist}},</span>
                    @endforeach 
                </div>
                <div class="line"></div>
                <div>Written by:
                    @foreach ($comic_info['writers'] as $writer)
                        <span>{{$writer}}</span>
                    @endforeach
                </div>
            </div>
            <div class="right">
                <h4>Specs</h4>
                <div class="line"></div>
                <div>Series: <span>{{$comic_info['series']}}</span></div>
                <div class="line"></div>
                <div>U.S. Price: <span>{{ $comic_info['price'] }}</span></div>
                <div class="line"></div>
                <div>On Sale Date: <span>{{ $comic_info['sale_date'] }}</span></div>
            </div>
        </div>
    </section>
@endsection