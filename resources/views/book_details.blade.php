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
                            <td>Nehemia Cecio</td>
                        </tr>
                        <tr>
                            <th>Author:</th>
                            <td>Zero to Hero php</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>Dengan sengaja tanpa hak dan tanpa hak atau melawan hukum mengakses dan/ atau sistem elektronik orang lain dengan cara apapun
                                Dengan sengaja dan tanpa hak atau melawan hukum  mengakses komputer dan/ atau sistem orang lain dengan cara apapun untuk tujuan memperoleh Informasi Elektronik dan/atau Dokumen Elektronik.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6" style="text-align: end;">
                    <button type="button" class="btn btn-warning position-end">Rent</button>
                </div>
            </div>
        </div>
    </div>

@endsection
