@include('partials.header')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container d-flex justify-content-center">
        <form method="post" action="{{route('loginUser')}}" class="d-flex gap-3 flex-column w-50">
            @csrf

            <input type="text" class="form-control brunswickGreen text-light border border-0" name="emailUser" placeholder="E-mail" value="{{old('email')}}">

            @error('emailUser')
            <div class="error-message text-light">
                <span class="fw-bold">{{$message}}</span>
            </div>
            @enderror

            <input type="password" class="form-control brunswickGreen text-light border border-0" name="passwordUser" placeholder="Password" value="{{old('password')}}">

            @error('passwordUser')
            <div class="error-message text-light">
                <span class="fw-bold">{{$message}}</span>
            </div>
            @enderror

            <button type="submit" class="btn brunswickGreen text-light fw-bold">LOGIN</button>
        </form>
    </div>
</div>

@include('partials.footer')