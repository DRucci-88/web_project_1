@extends('layouts.main')

@section('content')
    {{-- {{ $account }}
    <br>
    {{ $errors }} --}}
    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            @if (session()->has('message'))
                <button type="button" class="btn btn-primary btn-block">{{ session('message') }}</button>
            @endif

            <div class="col-md-11">

                <form action="/profile" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <h3>Profile</h3>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">First Name</label>
                                <div class="col-sm-3">
                                    <input name="first_name" type="text" class="form-control"
                                        value="{{ $account->first_name }}" required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Middle Name</label>
                                <div class="col-sm-3">
                                    <input name="middle_name" type="text" class="form-control"
                                        value="{{ $account->middle_name }}" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Last Name</label>
                                <div class="col-sm-3">
                                    <input name="last_name" type="text" class="form-control"
                                        value="{{ $account->last_name }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label" for="rolesDropdown">Gender</label>
                                <select name="gender_id" class="col-sm-3" id="rolesDropdown">
                                    <option value="1" {{ $account->genders->id === 1 ? 'selected' : '' }}>Male</option>
                                    <option value="2" {{ $account->genders->id === 2 ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label">Role</label>
                                <div class="col-sm-6">
                                    <label class="col-form-label border rounded text-center"
                                        style="width: 20%">{{ $account->roles->role_desc }}</label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <p class="col-sm-6 col-form-label">Email</p>
                                <div class="col-sm-6">
                                    <input name="email" type="text" class="form-control" value="{{ $account->email }}"
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <p class="col-sm-6 col-form-label">Password</p>
                                <div class="col-sm-6">
                                    <input name="password" type="text" class="form-control"
                                        placeholder="Insert new Password ...." required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-form-label col-sm-6">Current Picture</label>
                                <div class="col-sm-3">
                                    <img src="/img/{{ $account->display_picture_link }}">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $account->id }}">
                            <input type="hidden" name="display_picture_link"
                                value="{{ $account->display_picture_link }}">
                            <input type="hidden" name="role_id" value="{{ $account->role_id }}">

                            <div class="row mb-3">
                                <label class="col-form-label col-sm-6" for="inputGroupFile01">New Display Picture</label>
                                <div class="col-sm-3">
                                    <input name="new_display_picture_link" type="file" class="form-control"
                                        id="inputGroupFile01">
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-md-block">
                                <button type="submit" class="btn btn-warning">Save</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
