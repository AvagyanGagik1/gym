@foreach($firstComments as $comment)
    <div class="col-12 p-0">

        <div class="col-12 p-0 d-flex align-items-center">
            <div>
                <img src="{{optional($comment->user)->avatar}}" alt="">
            </div>
            <h3>{{optional($comment->user)->name}}</h3>
        </div>
        {!! $comment->text !!}
        <button class="answerInput" data-program="{{$program->id}}"
                data-user="{{auth()->id()}}" data-parent="{{$comment->id}}"
                data-workout="{{$program->workout[0]->id}}">Ответить
        </button>

        <form action="{{route('add.comment')}}" method="post">
            @csrf
        </form>
    </div>
    @include('front.user.helpers._answer',['comments'=>$comment->childs])
@endforeach
