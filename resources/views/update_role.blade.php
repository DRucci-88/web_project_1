@extends('layouts.main')

@section('content')

    <div class="container flex-fill py-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                <h3>Robert Junior</h3>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">Role</label>
                    <select class="form-select" id="inputGroupSelect01">
                        <option>Choose...</option>
                        <option selected value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="d-grid gap-2">
                    <a class="btn btn-outline-primary" type="button">Save</a>
                </div>
            </div>
        </div>
    </div>

@endsection
