@extends('layouts.main')

@section('content')

    <div class="container flex-fill">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col" >Author</th>
                        <th scope="col">Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allEbook as $book)
                    <tr>
                        <td>{{$book->author}}</td>
                        <td><a href="/book_details/{{$book->id}}">{{$book->title}}</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
