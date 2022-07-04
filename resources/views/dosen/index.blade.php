@extends('layouts.master')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data Dosen</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('dosen.create') }}">Input Data Dosen</a>
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
            <th class="text-center">No Handphone</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">NIP</th>
            <th class="text-center">Mata Kuliah</th>
            <th class="text-center">Program Studi</th>
            <th class="text-center">Fakultas</th>
        </tr>
        @foreach ($dosen as $dosenn)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td class="text-center">{{ $dosenn->nama }}</td>
                <td class="text-center">{{ $dosenn->no_hp }}</td>
                <td class="text-center">{{ $dosenn->alamat }}</td>
                <td class="text-center">{{ $dosenn->nip }}</td>
                <td class="text-center">{{ $dosenn->mata_kuliah }}</td>
                <td class="text-center">{{ $dosenn->program_studi }}</td>
                <td class="text-center">{{ $dosenn->fakultas }}</td>
                <td class="text-center">
                    <form action="{{ route('dosen.destroy', $dosenn->id_dosen) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('dosen.show', $dosenn->id_dosen) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('dosen.edit', $dosenn->id_dosen) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $dosen->links() !!}
@endsection
