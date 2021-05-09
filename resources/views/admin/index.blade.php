@extends('layouts.admin.index')
@section('content')

    <div class="container">
        <div class="row">
{{--            <div class="col">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">Contacts</h5>--}}
{{--                        <h6 class="card-subtitle mb-2 text-muted">Contacts settings</h6>--}}
{{--                        <p class="card-text">Change your contacts information from admin panel</p>--}}
{{--                        <a href="{{route('contact.index')}}" class="card-link">Contacts</a>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Slider</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Slider setting</h6>
                        <p class="card-text">Change slider photos and texts from admin panel</p>
                        <a href="{{route('slider.index')}}" class="card-link">Slider</a>
                    </div>
                </div>
            </div>
{{--            <div class="col">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">Contact form</h5>--}}
{{--                        <h6 class="card-subtitle mb-2 text-muted">Contact form results</h6>--}}
{{--                        <p class="card-text">Saw the contact form requests</p>--}}
{{--                        <a href="{{route('contactForm.index')}}" class="card-link">Contact form</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h5 class="card-title">About page</h5>--}}
{{--                        <h6 class="card-subtitle mb-2 text-muted">click To change about page</h6>--}}
{{--                        <a href="{{route('about.index')}}" class="card-link">About</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
