<div class="d-none d-lg-flex align-items-center">
    <div class="sidebar-container d-flex justify-content-between align-items-center brunswickGreen height-85 ms-5 flex-column gap-5 rounded-4 p-4" id="sidebar-container">
        <div class="profile d-flex flex-row">
            <img class="rounded-circle" src="{{asset('build/assets/images/person-icon.png')}}" width="60px" height="60px">
            <div class="textHolder d-flex flex-column">
                <h4 class="titleColor font-size-2">Alice Madness</h4>
                <h4 class="titleColor font-size-1">alicemadness@gmail.com</h4>
            </div>
        </div>

            <div class="d-flex flex-column gap-5">
                <a class="d-flex flex-row justify-content-center btn sidebar-selector dashboard-button transparent border-0" href="{{route('home')}}">
                    <h4 class="titleColor font-size-2">Dashboard</h4>
                </a>

                <a class="d-flex flex-row justify-content-center btn sidebar-selector tasks-button transparent border-0" href="{{route('tasks')}}">
                    <h4 class="titleColor font-size-2">Task</h4>
                </a>
                
            </div>

        <button class="d-flex sidebar-selector settings-button transparent border-0 w-100" />
    </div>
</div>