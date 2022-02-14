@extends('layouts.main')

@section('content')
{{-- {{ $account->orders[0]->ebooks }}
<br/>
<br/>
<br/>
    {{ $orders[0]->ebooks }} --}}
    <div class="container mt-4 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tittle</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->ebooks->title }}</td>
                                <td>
                                    <button class="btn btn-outline-secondary">Delete</button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
