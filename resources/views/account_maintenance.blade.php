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
                                - {{ $account->roles->role_desc }}
                            </td>
                            <td>
                                <a href="/update_role/{{$account->id}}" type="button" class="btn btn-outline-primary col-sm-3">Update Role</a>
                                <form action="/deleteAccount/{{ $account->id }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary col-sm-3">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
