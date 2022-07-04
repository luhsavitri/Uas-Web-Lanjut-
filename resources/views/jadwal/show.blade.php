@extends('layouts.master')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Data Jadwal Dosen</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('jadwal.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Dosen:</strong>
                {{ $jadwal->dosen->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ruangan:</strong>
                {{ $jadwal->ruangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hari:</strong>
                {{ $jadwal->hari }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal:</strong>
                {{ $jadwal->tanggal }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Mulai:</strong>
                {{ $jadwal->waktu_mulai }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Selesai:</strong>
                {{ $jadwal->waktu_selesai }}
            </div>
        </div>
    </div>
@endsection
