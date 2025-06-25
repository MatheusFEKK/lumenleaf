@include('partials.header')

<div class="d-flex min-vw-100 min-vh-100">
    @include('components.sidebar')

    <div class="dashboard-view p-5 mt-4">
        <h1 class="titleColor">Dashboard</h1>
            <h1 class="subTextColor font-size-3 ms-3">Organize, prioritize and complete</h1>

            <div class="tasks-user brunswickGreen rounded-3 mt-5">
                <div class="title-tasks d-flex flex-row align-items-center">
                    <h4 class="titleColor mt-3 ms-3">Today's Tasks</h4>
                    <div class="task-count d-flex align-items-center justify-content-center blackOlive rounded-circle ms-2">
                        <span class="subTextColor">1</span>
                    </div>
                </div>


                <div class="d-flex justify-content-center container-taks">
                    @include('components.card-task')
                </div>
            </div>
    </div>
</div>

@include('partials.footer')














@include('partials.footer')