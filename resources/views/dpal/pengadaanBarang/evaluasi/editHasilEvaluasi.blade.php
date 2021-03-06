@extends('layouts/main-layout')
@section('title')
    {{ $pengsup->supplier->nama_supplier }}
@endsection
@section('content')
<div class=" bg-warning p-2 fw-bold text-white text-center fs-5">
  <span class="">Evaluasi</span>
</div>
<table class="table table-hover table-borderless">
  <tbody>
    {{-- <tr>
      <th scope="row">Kode</th>
      <td>PBA-001</td>
    </tr> --}}
    <tr>
      <th scope="row">Nama Pengadaan</th>
      <td>{{ $pengsup->pengadaan->budjet->nama_kegiatan }}</td>
    </tr>
    <tr>
      <th scope="row">Status</th>
      <td>
        @if ($pengsup->status_supplier === 'submitted')
        <button type="button" class="btn btn-sm btn-secondary">
          Submitted
        </button>
        @elseif($pengsup->status_supplier === 'tolak')   
        <button type="button" class="btn btn-sm btn-danger" >
          Tolak
        </button>
        @elseif($pengsup->status_supplier === 'acc')   
        <button type="button" class="btn btn-sm btn-primary" >
          Acc
        </button>
        @elseif($pengsup->status_supplier === 'validasi')   
        <button type="button" class="btn btn-sm btn-primary" >
          Validasi
        </button>
        @elseif($pengsup->status_supplier === 'selesai')   
        <button type="button" class="btn btn-sm btn-primary" >
          Selesai
        </button>
        @elseif($pengsup->status_supplier === 'belum_lunas')   
        <button type="button" class="btn btn-sm btn-danger" >
          Belum Lunas
        </button>
        @elseif($pengsup->status_supplier === 'evaluasi')   
        <button type="button" class="btn btn-sm btn-warning" >
          Evaluasi
        </button>
        @endif  
      </td>
    </tr>
    <tr>
      <th scope="row">Nama Supplier</th>
      <td>{{ $pengsup->supplier->nama_supplier }}</td>
    </tr>
    <tr>
      <th scope="row">Unit Kerja Pengusul</th>
      <td>{{ ucwords($pengsup->pengadaan->budjet->unit_kerja_pengusul) }}</td>
    </tr>
    <tr>
      <th scope="row">Harga Penawaran</th>
      <td>Rp {{ number_format($pengsup->harga_penawaran) }},-</td>
    </tr>
    <tr>
      <th scope="row">Harga Terkoreksi</th>
      <td>Rp {{ number_format($pengsup->harga_terkoreksi) }},-</td>
    </tr>
    <tr>
      <th scope="row">Hasil Penawaran DPAL ke Supplier</th>
      <td>{!! $pengsup->dpal_ke_supplier ?? 'Penawaran belum dilakukan' !!}</td>
    </tr>
    <tr>
      <th scope="row">Hasil Penawaran Supplier ke DPAL</th>
      <td>{!! $pengsup->supplier_ke_dpal ?? 'Penawaran belum dlakukan' !!}</td>
    </tr>
    @if ($pengsup->status_supplier === 'evaluasi')    
    <form action="{{ route('dpal.pengadaanBarang.formDpalKeSupplier', $pengsup->id) }}" method="post">
      @csrf
      @method('patch')
      <tr>
        <th scope="row">Evaluasi ke Supplier</th>
        <td>
          <textarea class="form-control" id="editor1" rows="6" name="dpal_ke_supplier">{{ $pengsup->dpal_ke_supplier }}</textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <div class="d-flex justify-content-end">
    <button class="btn btn-sm btn-primary">Simpan</button>
  </div>
    </form>
    @endif
@endsection