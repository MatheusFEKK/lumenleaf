@include('partials.header')

<div class="d-flex min-vw-100 min-vh-100">
    @include('components.sidebar')
    @include('components.bottom-bar')

    <div class="dashboard-view mt-5 ps-3 ps-lg-5">
        
        <div class="profile d-flex d-lg-none flex-row align-items-center mb-4">
            <img class="rounded-circle" src="{{asset('build/assets/images/person-icon.png')}}" width="60px" height="60px">
            <div class="textHolder d-flex flex-column align-items-center ps-2">
                <h4 class="titleColor font-size-2">{{$username}}</h4>
                <h4 class="titleColor font-size-1">{{$useremail}}</h4>
            </div>
        </div>

        
        <h1 class="titleColor">Dashboard</h1>
            <h1 class="subTextColor font-size-3 ms-3">Your focus starts here</h1>

            <div class="brunswickGreen rounded-3 mt-5 p-2">
                <div class="row title-tasks d-flex flex-row align-items-center gap-2">
                    <div class="d-flex col-12 align-items-center flex-wrap gap-2">
                        <h4 class="titleColor mt-3 ms-3">Today's Tasks</h4>
                        <div class="task-count d-flex justify-content-center align-items-center blackOlive rounded-circle">
                            <span class="subTextColor">1</span>
                        </div>
                    </div>
                </div>


                <div class="d-flex justify-content-center flex-column container-taks p-3 gap-3">
                        @include('components.card-task')
                        @include('components.card-task')
                </div>
            </div>
    </div>
</div>

@include('partials.footer')














@include('partials.footer')