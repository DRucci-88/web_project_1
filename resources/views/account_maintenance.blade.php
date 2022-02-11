@extends('layouts.main')

@section('content')

    <div class="container flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Account</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Robert Junior - Admin</td>
                        <td>
                            <a href="/" type="button" class="btn btn-outline-primary">Primary</a>
                            <a href="/" type="button" class="btn btn-outline-secondary">Secondary</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Leordee Junior - User</td>
                        <td>
                            <a href="/" type="button" class="btn btn-outline-primary">Update Role</a>
                            <a href="/" type="button" class="btn btn-outline-secondary">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
