@extends('layouts.main')

@section('content')
    <div class="container my-5 flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Book Name</th>

                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>The Title</td>

                                    <div class="d-grid gap-2 d-md-block">
                                        <a href="/book" class="btn btn-secondary">View Book Detail</a>
                                        <a href="/book" class="btn btn-primary">Edit</a>
                                        <form action="/cart/r/" method="POST" class="d-inline-block">
                                            <button class="btn btn-danger" type="submit">Remove</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                    <tr>
                        <td>The Title</td>
                    </tr>
                    </tbody>
                </table>
                <h6 class="mb-3">Grand Total: IDR </h6>

                    <form action="/checkout" method="POST">
                        <button class="btn btn-primary" type="submit">Checkout</button>
                    </form>

            </div>
        </div>
    </div>
@endsection
