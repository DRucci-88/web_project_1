@extends('layouts.main')

@section('content')
    <div class="container flex-fill py-4">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
                <h3>
                    {{ $account->first_name }}
                    @if ($account->middle_name !== null)
                        {{ $account->middle_name }}
                    @endif
                    {{$account->last_name}}

                </h3>
                {{-- {{ $account->roles->id }} --}}
                <div class="input-group mb-3">
                    <label class="input-group-text" for="rolesDropdown">Role</label>
                    <select class="form-select" id="rolesDropdown">

                        @foreach ($roles as $role)
                            <option value={{ $role->id }} {{ $account->roles->id === $role->id ? 'selected' : '' }}>
                                {{ $role->role_desc }}
                            </option>
                        @endforeach

                        {{-- <option selected value="{{$account->roles->id}}">{{$account->roles->role_desc}}</option>

                            <option value="{{$account->roles->id}}
                                "{{($key === $account->roles->id) ? 'selected': ''}}{{$value}}></option --}}

                    </select>
                </div>
                <div id="save" class="d-grid gap-2">
                    <a class="btn btn-outline-primary" type="button">Save</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>

        const account = @json($account);
        // console.log(account);

        $(document).on('click', '#save', (e) => {
            e.preventDefault();
            // const a = $('#rolesDropdown').val(); // en
            // console.log(a);
            const data = {
                'newRole': $('#rolesDropdown').val()
            }
            console.log(data);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/update_role/" + account.id,
                dataType: "json",
                data: data,
                success: (response) => {
                    if (response.status === 200) {
                        window.location.replace('/account_maintenance');
                        console.log(response.message);
                    } else {
                        alert(response.message);
                    }
                    console.log(response);
                },
                error: (response) => {
                    console.log(response);
                }
            });
        });
    </script>
@endsection
