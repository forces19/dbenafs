@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div id="contact">
        <h2>Detail Pesan</h2>

        <table class="table table-striped">
            <tr>
                <th>Nama</th>
                <td>{{ $contact->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $contact->email }}</td>
            </tr>
            <tr>
                <th>Isi Pesan</th>
                <td>{{ $contact->message }}</td>
            </tr>        
        </table>
        </div>
    </div>
@stop