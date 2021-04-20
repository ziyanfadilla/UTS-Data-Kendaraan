@extends('layouts.app')
@section('content')

<form action="{{route('kendaraan.update', $kendaraan->id)}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
        <label for="nomor_plat_kendaraan">Nomor Plat Kendaraan</label>
        <input type="text" class="form-control @error('nomor_plat_kendaraan') is-invalid @enderror" name="nomor_plat_kendaraan" id="nomor_plat_kendaraan" placeholder="Nomor Plat Kendaraan" value="{{ $kendaraan->nomor_plat_kendaraan }}">
        @error('nomor_plat_kendaraan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="merk_kendaraan">Merk Kendaraan</label>
        <input type="text" class="form-control @error('merk_kendaraan') is-invalid @enderror" name="merk_kendaraan" id="merk_kendaraan" placeholder="Merk Kendaraan" value="{{ $kendaraan->merk_kendaraan }}" />
        @error('merk_kendaraan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tipe_kendaraan">Tipe Kendaraan</label>
        <input type="text" class="form-control @error('tipe_kendaraan') is-invalid @enderror" name="tipe_kendaraan" id="tipe_kendaraan" placeholder="Tipe Kendaraan" value="{{ $kendaraan->tipe_kendaraan }}">
        @error('tipe_kendaraan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="form-control btn-primary">Simpan</button>
    </div>
</form>
    
@endsection