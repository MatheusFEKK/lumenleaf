<div class="col-2 brunswickGreen mt-5 ps-3 ps-lg-4 width-box-task height-box-task rounded">
    
    <div class="headerCard mt-2">
        <button class="blackOlive btn btn-closeWindow btn-sm border-none">
            <span class="font-size-2 text-light opacity-50">To do</span>
        </button>
    
        <button class="blackOlive btn btn-closeWindow btn-sm float-end border-none rounded" onclick="toggleNoteCreator()">

            <span class="font-size-2 text-light opacity-50">+</span>
        </button>
        <div class="tasks-holder mt-2">
            @foreach ($tasksUser as $task)
                    <x-card-task note-title='{{$task->noteTitle}}' />
            @endforeach
        </div>
    </div>

</div>