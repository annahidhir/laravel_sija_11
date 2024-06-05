@extends('layouts.index')

@section('content')
<div class="container">
    @if ($errors->any())
    <ul>
        @foreach ($errors ->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    @if (Session::has('validasi_nilai'))
    <div class="alert alert-danger">
    {{session::get('validasi_nilai') }}
    </div>
    @endif
    <form action="{{ route('aksi_tambah_nilai') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="siswa">Siswa</label>
            <select name="siswa_id" class="form-control">
                <option value="">Pilih siswa</option>
                @foreach($dataSiswa as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="nilai">Nilai</label>
            <input type="text" name="nilai" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection