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
                    @foreach($accounts as $account)
                        <tr>
                            <td>{{$account->first_name}}
                                @if($account->middle_name !== null)
                                    {{$account->middle_name}}
                                @endif
                                {{$account->last_name}}
                            </td>
                            <td>
                                <a href="/update_role/{{$account->id}}" type="button" class="btn btn-outline-primary">Update Role</a>
                                <a href="/" type="button" class="btn btn-outline-secondary">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
