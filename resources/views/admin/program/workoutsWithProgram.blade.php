@extends('layouts.admin.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="header">
                <h5>добавить тренировку в програму {{$program->name_ru}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="wrapper d-flex flex-wrap justify-content-between">
                @foreach($program->workout as $workout)
                    <div class="col-3">
                        <h5>{{$workout->name_ru}}</h5>
                        <h2>{{$workout->calories}}</h2>
                        @foreach($workout->videos as $video)
                            <div class="col-12 item">
                                <div id="player"></div>
                                <div class="position-absolute">
                                    <img class="playButton w-100" alt="playButton" id="playButton" src="/images/playButton.png"
                                         data-link="{{$video->link}}">
                                </div>
                                <img class="preview"
                                     src="//img.youtube.com/vi/{{$video->link}}/maxresdefault.jpg"
                                     alt="">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('admin.modals.remove')
@endsection
