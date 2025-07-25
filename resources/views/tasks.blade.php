@include('partials.header')

<div class="d-flex min-vw-100 min-vh-100" id="main-panel">
    @include('components.sidebar')
    @include('components.bottom-bar')

    
    <div class="dashboard-view mt-5 ps-3 ps-lg-5">
        <h1 class="titleColor">Yours Tasks</h1>
        <h1 class="subTextColor font-size-3 ms-3">Organize, prioritize and complete</h1>
        
        <div class="d-flex flex-row gap-5">
            <div class="d-flex justify-content-center row m-2 m-lg-0">
                @include('components.task-board')
                
            </div>
            <button class="btn w-25 h-25 mt-5" onclick="toggleNoteCreator('main-panel', 'creatorGroup', false)">
                <span class="text-light font-size-2">+ New Group</span>
                <div class="d-none flex-row" id="creatorGroup">
                    <input class="border border-0" type="text">
                </div>
            </button>
        </div>
    </div>
</div>


    <div class="d-none brunswickGreen position-absolute top-50 start-50 translate-middle w-75 h-75 rounded p-2" id="creatorNote">
        <button class="btn btn-closeWindow float-end border-none" onclick="toggleNoteCreator('main-panel', 'creatorNote', true)">
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
                        <textarea class="blackOlive border border-0 text-light" placeholder="Feel free to brainstorm..." name="noteDescription" id="noteDescription" cols="30" rows="10"></textarea>
                        <button type="submit" class="blackOlive border border-0 p-2 rounded-2 position-absolute bottom-0 end-0 m-3">
                            <span class="font-size-2 text-light">Salvar</span>
                        </button>
                </form>
        </div>
    </div>


















@include('partials.footer')