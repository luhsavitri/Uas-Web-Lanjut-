@extends('layouts.master')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data Dosen</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('dosen.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('dosen.update', $dosen->id_dosen) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama"
                        value="{{ $dosen->nama }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No Handphone:</strong>
                    <input type="number" name="no_hp" class="form-control" placeholder="Masukkan No Handphone"
                        value="{{ $dosen->no_hp }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                        value="{{ $dosen->alamat }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIP:</strong>
                    <input type="number" name="nip" class="form-control" placeholder="Masukkan NIP"
                        value="{{ $dosen->nip }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mata Kuliah:</strong>
                    <input type="text" name="mata_kuliah" class="form-control" placeholder="Masukkan Mata Kuliah"
                        value="{{ $dosen->mata_kuliah }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Program Studi:</strong>
                    <input type="text" name="program_studi" class="form-control" placeholder="Masukkan Program Studi"
                        value="{{ $dosen->program_studi }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fakultas:</strong>
                    <input type="text" name="fakultas" class="form-control" placeholder="Masukkan Fakultas"
                        value="{{ $dosen->fakultas }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
@endsection
