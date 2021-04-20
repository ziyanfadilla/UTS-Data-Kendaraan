@extends('layouts.app')
@section('content')

<div class="my-3">
    <a href="{{route('kendaraan.create')}}" class="btn btn-primary">Tambah</a>
</div>

<table class="table table-striped">
    <thead>
      <tr>
          <th scope="col">No</th>
        <th scope="col">Nomor Plat Kendaraan</th>
        <th scope="col">Merk Kendaraan</th>
        <th scope="col">Tipe Kendaraan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @php
          $nomor = 1;
      @endphp
      @forelse ($kendaraanData as $kendaraan)
      <tr>
        <th scope="row">{{ $nomor++ }}</th>
        <td>{{ $kendaraan->nomor_plat_kendaraan }}</td>
        <td>{{ $kendaraan->merk_kendaraan }}</td>
        <td>{{ $kendaraan->tipe_kendaraan }}</td>
        <td>
            <form action="{{route('kendaraan.destroy', $kendaraan->id )}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <a href="{{route('kendaraan.edit', $kendaraan->id)}}" class="btn btn-warning">Edit</a>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
      </tr>    
      @empty

      <tr>
          <td colspan="4" class="text-center">Data not found</td>
      </tr>
          
      @endforelse
    </tbody>
  </table>
    
@endsection