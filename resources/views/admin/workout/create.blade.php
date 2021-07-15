@extends('layouts.admin.index')
@section('content')
    <div class="container border p-5 bg-white">
        <h2 class="pb-5">Форма для питания</h2>
        <form action="{{route('workOut.store')}}" id="workoutForm" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row pb-3">
                <label for="program_id" class="col-sm-2 col-form-label font-weight-bold">Програма Тренировкы:</label>
                <div class="col-sm-10">
                    <select class="custom-select" id="food_category_id" name="program_id">
                        <option disabled @if(!old('program_id')) selected @endif>--Выберите програму для тренировки--
                        </option>
                        @foreach($programs as $program)
                            <option value="{{$program->id}}"
                                    @if(old('program_id')=== $program->id) selected @endif>{{$program->name_ru}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('program_id'))
                        <span class="text-danger">{{ $errors->first('program_id')}}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{old('name_ru')}}">
                    @if ($errors->has('name_ru'))
                        <span class="text-danger">{{ $errors->first('name_ru') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Имя (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_en" name="name_en" value="{{old('name_en')}}">
                    @if ($errors->has('name_en'))
                        <span class="text-danger">{{ $errors->first('name_en') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_blr" name="name_blr" value="{{old('name_blr')}}">
                    @if ($errors->has('name_blr'))
                        <span class="text-danger">{{ $errors->first('name_blr') }}</span>
                    @endif
                </div>
            </div>
            <div class="form-group row pb-3">
                <label for="calories" class="col-sm-2 col-form-label font-weight-bold">Калории :</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="calories" name="calories" value="{{old('calories')}}">
                    @if ($errors->has('calories'))
                        <span class="text-danger">{{ $errors->first('calories') }}</span>
                    @endif
                </div>
            </div>
            <div class="video-create flex-column d-flex">
                <button type="button" class="btn btn-sm btn-primary ml-auto mb-2" id="cloneVideoDiv">Добавить еше
                    выдео
                </button>
                <div class="form-group row pb-3" id="videoDiv">
                    <label for="link" class="col-sm-2 col-form-label font-weight-bold">Сылка на выдео:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link" name="link[]" value="{{old('link')}}">
                        @if ($errors->has('link'))
                            <span class="text-danger">{{ $errors->first('link') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="task-create d-flex flex-column">
                <button type="button" class="btn btn-sm btn-primary ml-auto mb-2" id="cloneTaskDiv">Добавить заданые
                </button>
                <div class="form-group row pb-3" id="taskDiv" data-key="0">
                    <label for="task_ru" class="col-sm-2 col-form-label font-weight-bold">Заданые (ru):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control tasks" id="task_ru" name="task[]" data-lang="ru" value="{{old('task_ru')}}">
                        @if ($errors->has('task_ru'))
                            <span class="text-danger">{{ $errors->first('task_ru') }}</span>
                        @endif
                    </div>
                    <label for="task_en" class="col-sm-2 col-form-label font-weight-bold">Заданые (en):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control tasks" id="task_en" name="task[]" data-lang="en" value="{{old('task_en')}}">
                        @if ($errors->has('task_en'))
                            <span class="text-danger">{{ $errors->first('task_en') }}</span>
                        @endif
                    </div>
                    <label for="task_blr" class="col-sm-2 col-form-label font-weight-bold">Заданые (blr):</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control tasks" id="task_blr" name="task[]" data-lang="blr" value="{{old('task_blr')}}">
                        @if ($errors->has('task_blr'))
                            <span class="text-danger">{{ $errors->first('task_blr') }}</span>
                        @endif
                    </div>
                    <div class="subtask col-8 ml-auto d-flex flex-column mt-2">
                        <button type="button" class="btn btn-sm btn-success ml-auto mb-2 cloneSubTaskDiv">Добавить
                            Подзаданые
                        </button>
                        <div class="form-group row pb-3" id="subTaskDiv" data-key="0">
                            <label for="subTask_ru" class="col-sm-2 col-form-label font-weight-bold">Подзаданые (ru):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control subtasks" id="subTask_ru" data-lang="ru" name="subTask[]"
                                       value="{{old('subTask_ru')}}">
                                @if ($errors->has('subTask_ru'))
                                    <span class="text-danger">{{ $errors->first('subTask_ru') }}</span>
                                @endif
                            </div>
                            <label for="subTask_en" class="col-sm-2 col-form-label font-weight-bold">Подзаданые (en):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control subtasks" id="subTask" data-lang="en" name="subTask[]"
                                       value="{{old('subTask_en')}}">
                                @if ($errors->has('subTask_en'))
                                    <span class="text-danger">{{ $errors->first('subTask_en') }}</span>
                                @endif
                            </div>
                            <label for="subTask_blr" class="col-sm-2 col-form-label font-weight-bold">Подзаданые (blr):</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control subtasks" id="subTask_blr" data-lang="blr" name="subTask[]"
                                       value="{{old('subTask_blr')}}">
                                @if ($errors->has('subTask_blr'))
                                    <span class="text-danger">{{ $errors->first('subTask_blr') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                {{--            <div class="form-group row">--}}
                {{--                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Картинка для выдео:</label>--}}
                {{--                <div class="container-image col-sm-10">--}}
                {{--                    <label class="label" for="input">Пожалуйста добавте изоброжения !</label>--}}
                {{--                    <div class="input">--}}
                {{--                        <input name="image" id="file" type="file">--}}
                {{--                        @if ($errors->has('image'))--}}
                {{--                            <span class="text-danger">{{ $errors->first('image') }}</span>--}}
                {{--                        @endif--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--            </div>--}}
                <div class="form-group row">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Создать</button>
                        <a href="{{route('workOut.index')}}" class="btn btn-danger">Назад</a>
                    </div>
                </div>
        </form>
    </div>
@endsection
