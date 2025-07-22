@include('partials.header')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container d-flex justify-content-center">
        <form method="post" action="{{route('registerUser')}}" class="d-flex gap-3 flex-column w-50">
            @csrf
            <input type="text" class="form-control brunswickGreen text-light border border-0" name="name" placeholder="Name" value="{{old('name')}}">

            @error('name')
            <div class="error-message text-light">
                <span class="fw-bold">{{$message}}</span>
            </div>
            @enderror

            <input type="text" class="form-control brunswickGreen text-light border border-0" name="email" placeholder="E-mail" value="{{old('email')}}">

            @error('email')
            <div class="error-message text-light">
                <span class="fw-bold">{{$message}}</span>
            </div>
            @enderror

            <input type="password" class="form-control brunswickGreen text-light border border-0" name="password" placeholder="Password" value="{{old('password')}}">

            @error('password')
            <div class="error-message text-light">
                <span class="fw-bold">{{$message}}</span>
            </div>
            @enderror

            <input type="password" class="form-control brunswickGreen text-light border border-0" name="password_confirm" placeholder="Confirm Password" value="{{old('password_confirm')}}">

            @error('password_confirm')
            <div class="error-message text-light">
                <span class="fw-bold">{{$message}}</span>
            </div>
            @enderror
            
            <a href="{{route('login')}}" class="text-light align-self-end fw-bold">Already have an account?</a>
             <div class="d-flex align-self-end">
                 <button type="submit" class="btn brunswickGreen text-light fw-bold">SIGNUP</button>
            </div>
        </form>
    </div>
</div>

@include('partials.footer')