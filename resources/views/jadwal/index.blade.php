@extends('layouts.master')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Jadwal Dosen</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('jadwal.create') }}">Input Data Jadwal Dosen</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th class="text-center">Nama Dosen</th>
            <th class="text-center">Ruangan</th>
            <th class="text-center">Hari</th>
            <th class="text-center">Tanggal</th>
            <th class="text-center">Waktu Mulai</th>
            <th class="text-center">Waktu Selesai</th>
        </tr>
        @foreach ($jadwal as $jadwall)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td class="text-center">{{ $jadwall->dosen->nama }}</td>
                <td class="text-center">{{ $jadwall->ruangan }}</td>
                <td class="text-center">{{ $jadwall->hari }}</td>
                <td class="text-center">{{ $jadwall->tanggal }}</td>
                <td class="text-center">{{ $jadwall->waktu_mulai }}</td>
                <td class="text-center">{{ $jadwall->waktu_selesai }}</td>
                <td class="text-center">
                    <form action="{{ route('jadwal.destroy', $jadwall->id_jadwal) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('jadwal.show', $jadwall->id_jadwal) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('jadwal.edit', $jadwall->id_jadwal) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $jadwal->links() !!}
@endsection
