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
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                   required>
                        </div>
                        <div class="input-group mb-1">
                            <span class="input-group-text"><i class="bi-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password"
                                   placeholder="Password" required>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
        $(document).on('click', '#login_btn', (e) => {
            e.preventDefault();

            const data = {
                'email': $('#email').val(),
                'password': $('#password').val(),
            }
            console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                type: "POST",
                url: "/login",
                dataType: "json",
                data:data,
                success: (response) => {
                    if(response.status === 200){
                        window.location.replace("/home");
                    }
                    else{
                        alert("Gagal Boss");
                    }
                    console.log(response);
                },
                error:(response) =>{
                    console.log(response);
                }
            });
        });
    </script>

    <script>
        const x = document.getElementById('password');
        const checkPassword = document.getElementById('exampleCheck1');
        const showPassword = () => {
            console.log('Show Password');
            if (checkPassword.checked === true)
                x.type = 'text'
            else
                x.type = 'password';
        }
    </script>
@endsection
