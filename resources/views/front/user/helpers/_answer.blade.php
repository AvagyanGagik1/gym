@foreach($comments as $answer)
    <div class="col-12 p-0 answer">
        <div class="col-12 p-0 d-flex align-items-center">
            <div>
                <img src="{{$answer->user->avatar??'/images/emptyAvatar.png'}}" alt="">
            </div>
            <h3>{{$answer->user->name}}</h3>
        </div>
        <p>#{{$answer->user->name}}<br> {!! $answer->text !!}</p>
        <button class="answerInput" data-program="{{$program->id}}"
                data-user="{{auth()->id()}}" data-parent="{{$answer->id}}"
                data-workout="{{$program->workout[0]->id}}" data-button="{{__('language.reply')}}" data-place="{{__('language.answer')}}">{{__('language.reply')}}
        </button>
        <form action="{{route('add.comment')}}" method="post">
            @csrf
        </form>

    </div>
    @if($answer->childs)
        @include('front.user.helpers._answer',['comments' => $answer->childs])
    @endif
@endforeach
