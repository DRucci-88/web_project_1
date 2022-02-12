@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <form action="/login" method="POST" class="card shadow p-3">
                    @csrf
                    <div class="card-body">
                        <h2 class="mb-3">Login</h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="email" value="{{ Cookie::get('email') }}" placeholder="Email" required>
                        </div>
                        <div class="input-group mb-1">
                            <span class="input-group-text"><i class="bi-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password" value="{{ Cookie::get('password') }}" id="password" placeholder="Password" required>
                        </div>

                        <div class="form-group form-check mb-3" onclick="showPassword()">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>


                        <button class="btn btn-warning form-control mb-3" id="login_btn">
                            <i class="bi-box-arrow-in-right me-1"></i>
                            Login
                        </button>
                        <a href="/register" class="link-primary">Don't have account? click here to sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
            integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

<script>
    $(document).on('click','#login_btn',(e)=> {
        e.preventDefault();

        const data= {
            'email' : $('#email'),
            'password' : $('#password')
        }
        console.log(data);

        $.ajax({
            type:"POST",
            url:""
        })
        }
    )
</script>



    <script>
        const x = document.getElementById('password');
        const checkPassword = document.getElementById('exampleCheck1');
        const showPassword = () => {
            console.log('Show Password');
            if(checkPassword.checked === true)
                x.type = 'text'
            else
                x.type = 'password';
        }
    </script>
@endsection
