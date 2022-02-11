@extends('layouts.main')

@section('content')
  <style>
    span {
      color: red;
    }
  </style>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4">
        <form action="/register" method="POST" class="card shadow p-3">
          @csrf
          <div class="card-body">
  {{--          {{ $errors }}--}}
            <h2 class="mb-3">Register</h2>
            <div class="input-group mt-3">
              <span class="input-group-text"><i class="bi-envelope"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>
            <span>{{ $errors->first('email') }}</span>
            <div class="input-group mt-3">
              <span class="input-group-text"><i class="bi-person"></i></span>
              <input type="text" class="form-control" name="name" placeholder="Full Name" required>
            </div>
            <span>{{ $errors->first('name') }}</span>
            <div class="input-group mt-3">
              <span class="input-group-text"><i class="bi-lock"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
            </div>

            <div class="input-group mt-3">
              <span class="input-group-text"><i class="bi-lock"></i></span>
              <input type="password" class="form-control" name="password_confirmation" id="confirmPassword" placeholder="Confirmation Password"
                    required>
            </div>

            @foreach( $errors->get('password') as $message )
              <span>{{ $message }}<br></span>
            @endforeach

            <div class="form-group form-check mt-3" onclick="showPassword()">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>

            <button class="btn btn-warning form-control mt-3">
              <i class="bi-person-lines-fill me-1"></i>
              Register
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
      const x = document.getElementById("password");
      const y = document.getElementById("confirmPassword");
      const checkPassword = document.getElementById('exampleCheck1');
      const showPassword = () => {
          console.log('show password');
          if(checkPassword.checked === true){
              x.type = "text";
              y.type = "text";
          }
          else{
              x.type = "password";
              y.type = "password";
          }
      }
  </script>
@endsection
