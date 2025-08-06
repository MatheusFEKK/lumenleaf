

<div class="col-2 brunswickGreen mt-5 ps-3 ps-lg-4 width-box-task height-box-task rounded">
    
    <div class="headerCard mt-2">
        <button class="blackOlive btn btn-closeWindow btn-sm border-none">
            <span class="font-size-2 text-light opacity-50">{{$taskBoardName}}</span>
        </button>
    
        <button class="blackOlive btn btn-closeWindow btn-sm float-end border-none rounded" onclick="toggleNoteCreator('main-panel', 'creatorNote', {!! $taskBoardId !!})" id="elementHide">

            <span class="font-size-2 text-light opacity-50">+</span>
        </button>
        <div class="d-flex flex-column tasks-holder mt-2 gap-2">
            @foreach ($data as $task)
                <x-card-task note-title='{{$task->noteTitle}}' />
            @endforeach
        </div>
    </div>

</div>

<div class="d-none brunswickGreen position-absolute top-50 start-50 translate-middle w-75 h-75 rounded p-2" id="creatorNote">
        <button class="btn btn-closeWindow float-end border-none" onclick="toggleNoteCreator('main-panel', 'creatorNote')">
            <span>X</span>
        </button>

        <div class="d-flex flex-column mt-5 ps-2">
                <form class="d-flex flex-column gap-5" action="{{route('createTask')}}" method="POST">
                    @csrf
                        <div class="d-flex flex-column">
                            @error('noteTitle')
                                <div class="error-message text-light">
                                    <span class="fw-bold">{{$message}}</span>
                                </div>
                            @enderror
                            <label class="text-light" for="titleNote">Title Note...</label>
                            <input class="brunswickGreen pt-3 border border-black border-top-0 border-start-0 border-end-0 text-light" type="text" name="noteTitle" id="titleNote" placeholder="What's in your mind?">
                        </div>
                         @error('noteDescription')
                                <div class="error-message text-light">
                                    <span class="fw-bold">{{$message}}</span>
                                </div>
                            @enderror
                        <input type="hidden" name="idNoteCategories" id="idNoteCategories">
                        <textarea class="blackOlive border border-0 text-light" placeholder="Feel free to brainstorm..." name="noteDescription" id="noteDescription" cols="30" rows="10"></textarea>
                        <button type="submit" class="blackOlive border border-0 p-2 rounded-2 position-absolute bottom-0 end-0 m-3">
                            <span class="font-size-2 text-light">Salvar</span>
                        </button>
                </form>
        </div>
    </div>


