@extends('layouts.app')

@section('content')
    <div class="containerku">
        <div class="container-fluid">
        <div id="email">
        <h2>Email</h2>

        @if (count($contact_list) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 5; $i = $i*($currentpage-1); ?>
                    <?php foreach($contact_list as $contact): ?>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        {{--  <td>  --}}
                            {{--  <div class="box-button">
                                <a class="btn btn-info" type="button" href="{{ url('show/{contact}') }}">Lihat Pesan</a>
                            </div>  --}}
                            {{--  @if (Auth::check() && Auth::user()->level == 'Admin' || Auth::user()->level == 'Guru')
                                <div class="box-button">
                                    {{ link_to('siswa/' . $siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
                                </div>
                                <div class="box-button">
                                    {!! Form::open(['method' => 'DELETE','onsubmit'=>'return confirm("Do you really want to submit the form?");', 'action' => ['SiswaController@destroy', $siswa->id]]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                </div>
                                <div class="box-button">
                                    {{ link_to('absensi/' . $siswa->id . '/create', 'Absensi', ['class' => 'btn btn-info btn-sm']) }}
                                </div>
                            @endif  --}}
                        {{--  </td>  --}}
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        @else
            <p>Tidak ada data contact.</p>
        @endif

        <div class="table-nav">
            <div class="jumlah-data">
                <strong> Jumlah Pesan: {{ $jumlah_contact }} </strong>
            </div>
            <div class="paging">
                {{ $contact_list->links() }}
            </div>
        </div>
    </div> <!-- / #siswa -->
    </div>
    </div>
@stop
{{--  @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
