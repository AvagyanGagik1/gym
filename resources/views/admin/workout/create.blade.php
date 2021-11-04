<div class="border col-12 mb-3 workout-clone m-2">
    <h1 class="training-header m-2">тренировка</h1>
    <div class="form-group row pb-3">
        <label for="name_ru" class="col-sm-2 col-form-label font-weight-bold">Имя (ru):</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{old('name_ru')}}">
            <span class="text-danger d-none name_ru"></span>
        </div>
    </div>
    <div class="form-group row pb-3">
        <label for="name_en" class="col-sm-2 col-form-label font-weight-bold">Имя (en):</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name_en" name="name_en" value="{{old('name_en')}}">
            <span class="text-danger d-none name_en"></span>
        </div>
    </div>
    <div class="form-group row pb-3">
        <label for="name_blr" class="col-sm-2 col-form-label font-weight-bold">Имя (blr):</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name_blr" name="name_blr" value="{{old('name_blr')}}">
            <span class="text-danger d-none name_blr"></span>

        </div>
    </div>
    <div class="form-group row pb-3">
        <label for="calories" class="col-sm-2 col-form-label font-weight-bold">Калории :</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="calories" name="calories" value="{{old('calories')}}">
            <span class="text-danger d-none calories"></span>

        </div>
    </div>
    <div class="video-create flex-column d-flex">
        @if($type==='Hall')
        <button type="button" class="btn btn-sm btn-primary ml-auto mb-2 cloneVideoDiv">Добавить еше
            выдео
        </button>
        @endif
        <div class="form-group row pb-3 videoDiv">
            <label for="link" class="col-sm-2 col-form-label font-weight-bold">Сылка на выдео:</label>
            <div class="col-sm-10  pr-5">
                <input type="text" class="form-control" id="link" name="link[]" value="{{old('link')}}">
                <span class="text-danger d-none link"></span>

            </div>
        </div>
    </div>
    @if($type==='Hall')
        <div class="task-create d-flex flex-column">
            <button type="button" class="btn btn-sm btn-primary ml-auto mb-2 cloneTaskDiv">Добавить задание
            </button>
            <span class="text-danger d-none taskSpan"></span>
            <div class="form-group row pb-3 taskDiv" id="" data-key="0">
                <label for="task_ru" class="col-sm-2 col-form-label font-weight-bold">Задание (ru):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control tasks" id="task_ru" name="task[]" data-lang="ru"
                           value="{{old('task_ru')}}">
                </div>
                <label for="task_en" class="col-sm-2 col-form-label font-weight-bold">Задание (en):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control tasks" id="task_en" name="task[]" data-lang="en"
                           value="{{old('task_en')}}">
                </div>
                <label for="task_blr" class="col-sm-2 col-form-label font-weight-bold">Задание (blr):</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control tasks" id="task_blr" name="task[]" data-lang="blr"
                           value="{{old('task_blr')}}">
                </div>
                <div class="subtask col-8 ml-auto d-flex flex-column mt-2">
                    <button type="button" class="btn btn-sm btn-success ml-auto mb-2 cloneSubTaskDiv">Добавить
                        Подзадание
                    </button>
                    <span class="text-danger d-none subtaskSpan"></span>
                    <div class="form-group row pb-3 subTaskDiv" data-key="0">
                        <label for="subTask_ru" class="col-sm-2 col-form-label font-weight-bold">Подзадание
                            (ru):</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control subtasks" id="subTask_ru" data-lang="ru"
                                   name="subtask[]"
                                   value="{{old('subTask_ru')}}">
                            @if ($errors->has('subTask_ru'))
                                <span class="text-danger">{{ $errors->first('subTask_ru') }}</span>
                            @endif
                        </div>
                        <label for="subTask_en" class="col-sm-2 col-form-label font-weight-bold">Подзадание
                            (en):</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control subtasks" id="subTask" data-lang="en"
                                   name="subtask[]"
                                   value="{{old('subTask_en')}}">
                            @if ($errors->has('subTask_en'))
                                <span class="text-danger">{{ $errors->first('subTask_en') }}</span>
                            @endif
                        </div>
                        <label for="subTask_blr" class="col-sm-2 col-form-label font-weight-bold">Подзадание
                            (blr):</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control subtasks" id="subTask_blr" data-lang="blr"
                                   name="subtask[]"
                                   value="{{old('subTask_blr')}}">
                            @if ($errors->has('subTask_blr'))
                                <span class="text-danger">{{ $errors->first('subTask_blr') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
