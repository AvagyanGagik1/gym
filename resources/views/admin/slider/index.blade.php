@extends('layouts.admin.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col mb-4">
                <a href="{{route('slider.create')}}" class="btn btn-success">Add new slide</a>
            </div>
        </div>
        <div class="row flex-wrap">
            @foreach($sliders as $slider)
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <img src="{{$slider->image}}" alt="" class="img-thumbnail">
                            </div>
                            <div>
                                <div class="title">
                                    <h1>{{$slider->title}}</h1>
                                </div>
                                <div class="short-description">
                                    <p>{{$slider->short_description}}</p>
                                </div>
                                <div class="long-description">
                                    <p>{{$slider->long_description}}</p>
                                </div>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <a href="{{route('slider.edit',['id'=>$slider->id])}}" class="btn"><i class="far fa-edit"></i></a>
                                <i class="fas fa-trash-alt custom-icon-remove" data-id="{{$slider->id}}" data-name="{{$slider->title}}" data-type="slider"></i>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('admin.modals.remove')
@endsection
