@include('partials.header')

<div class="d-flex min-vw-100 min-vh-100" id="main-panel">
    @include('components.sidebar')
    
    
    <div class="dashboard-view mt-5 ps-lg-5">
        <div class="ps-3">
            <h1 class="titleColor">Yours Tasks</h1>
            <h1 class="subTextColor font-size-3 ms-3">Organize, prioritize and complete</h1>
        </div>
        
        <div class="d-flex flex-row gap-5 flex-wrap">
            <div class="mt-5" id="elementHide">
                <button id="elementHide" class="btn bg-transparent text-light border border-0 w-100" onclick="toggleNoteCreator('main-panel', 'creatorGroup')">+ New Group</button>
                <form class="d-none flex-row d-flex gap-3" action="{{route('createCategorie')}}" id="creatorGroup" method="POST">
                    @csrf
                    <input class="border border-0 brunswickGreen rounded" type="text" name="newCategorieName" id="elementHide">
                    <button type="submit" class="btn brunswickGreen text-light" id="elementHide">Done</button>
                </form>
            </div>
            
            <div class="d-flex flex-row justify-content-center row m-2 m-lg-0 gap-4">
                @foreach ($categories as $categorie)
                <x-task-board  task-board-name='{{$categorie->nameNoteCategories}}' task-board-id='{{$categorie->idNoteCategories}}'/>
                    @endforeach
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    @include('components.bottom-bar')

    

















@include('partials.footer')