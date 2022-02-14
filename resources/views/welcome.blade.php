@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2 border border-4 border-dark rounded-pill rounded-1" style="height: 15rem; width: 15rem">
                <p class="fs-5 text-center"  style="margin-top: 80px; ">
                    @if(session()->has('message'))
                        {{session('message')}}
                    <br/>
                        <a href="/home">Click here to Home</a>
                    @else
                    Find and Rent E-Book Here!
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection
