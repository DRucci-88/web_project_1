@extends('layouts.main')

@section('content')
    <style>
        span {
            color: red;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="/register" method="POST" class="card shadow p-10">
                    @csrf
                    <div class="card-body">
                        {{--          {{ $errors }}--}}
                        <h2 class="mb-3">Register</h2>
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <div class="input-group mt-3">
                                    <span class="input-group-text"><i class="bi-person"></i></span>
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                           placeholder="First Name"
                                           required>
                                </div>
                                <span>{{ $errors->first('first_name') }}</span>

                                <div class="input-group mt-3">
                                    <span class="input-group-text"><i class="bi-person"></i></span>
                                    <input id="middle_name" type="text" class="form-control" name="middle_name"
                                           placeholder="Middle Name">
                                </div>
                                <span>{{ $errors->first('middle_name') }}</span>

                                <div class="input-group mt-3">
                                    <span class="input-group-text"><i class="bi-person"></i></span>
                                    <input id="last_name" type="text" class="form-control" name="last_name"
                                           placeholder="Last Name"
                                           required>
                                </div>
                                <span>{{ $errors->first('last_name') }}</span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group mt-3">
                                    <span class="input-group-text"><i class="bi-envelope"></i></span>
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email"
                                           required>
                                </div>
                                <span>{{ $errors->first('email') }}</span>

                                <div class="input-group mt-3">
                                    <span class="input-group-text"><i class="bi-lock"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                           id="password" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Role</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option>Choose...</option>
                                        <option selected value="user">User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mt-3 ">
                            <label class="col-sm-6 col-form-label">Gender</label>
                            <div class="col-sm-6">
                                <div class="form-check ">
                                    <input class="form-check-input " type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault1">
                                    <label class="form-check-label " for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                           id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mt-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>


                        @foreach( $errors->get('password') as $message )
                            <span>{{ $message }}<br></span>
                        @endforeach

                        <div class="form-group form-check mt-3" onclick="showPassword()">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Show Password</label>
                        </div>

                        <button id="btn_register" type="submit" class="btn btn-warning form-control mt-3">
                            <i class="bi-person-lines-fill me-1"></i>
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
            integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <script>

        $(document).on('click', '#btn_register', (e) => {
            e.preventDefault();
            const data = {
                'first_name': $('#first_name'),
                'middle_name': $('#middle_name'),
                'last_name': $('#last_name'),
                'email': $('')
            }
        });

        const x = document.getElementById("password");
        const y = document.getElementById("confirmPassword");
        const checkPassword = document.getElementById('exampleCheck1');
        const showPassword = () => {
            console.log('show password');
            if (checkPassword.checked === true) {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }
    </script>
@endsection
