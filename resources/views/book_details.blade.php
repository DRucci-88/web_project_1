@extends('layouts.main')

@section('content')

    <div class="container" style="margin: 0 0 15rem 2.5rem" >
        <div class="row">
            <div class="col col-sm-10">
                <h1>E-Book Details</h1>
                <table class="table table-borderless">
                    <tbody>

                        <tr>
                            <th>Title :</th>
                            <td>{{$ebook->title}}</td>
                        </tr>
                        <tr>
                            <th>Author:</th>
                            <td>{{$ebook->author}}</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{$ebook->description}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6" style="text-align: end;">
                    <form action="/rent/{{ $ebook->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-warning position-end">Rent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
