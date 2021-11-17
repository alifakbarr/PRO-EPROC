@extends('layouts/main-layout')
@section('title', 'Pemenang')
@section('content')
@include('warek/pengadaanBarang/navbarPengadaan')
<div class="mt-4">
  <div class="row">
    <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
    </div>
    <div class="col">
        <h3 class="">CV Merah Putih</h3>
        <p class="card-text">Supplier</p>
    </div>
  </div>
  <div class="row pt-4">
    <table class="table table-hover">
        <tbody>
          <tr>
            <td>Kode</td>
            <td>Sup-1</td>
          </tr>
          <tr>
            <td>Nama Perusahaan</td>
            <td>CV Merah Putih</td>
          </tr>
          <tr>
            <td>NPWP</td>
            <td>01.234.567.8-123.000</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>Jl.Simpang Kanan Sidoarjo</td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td>0895642343678</td>
          </tr>
          <tr>
            <td>Nara Hubung</td>
            <td>Bapak Budi</td>
          </tr>
          <tr>
            <td>Bidang Usaha</td>
            <td>Komputer</td>
          </tr>
          <tr>
            <td>No Rekening</td>
            <td>9823947</td>
          </tr>
          <tr class="table-info">
            <td>Nilai Kontrak</td>
            <td>Rp. 50.000.000</td>
          </tr>
          <tr>
            <td>File</td>
            <td><a href="">Cetak Berita Acara</a></td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="accordion mt-2" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Hasil Evaluasi : CV Merah Putih
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Harga Penawaran</th>
                <td>Rp 70.000.000</td>
              </tr>
              <tr>
                <th scope="row">Harga Terkoreksi</th>
                <td>Rp 67.000.000</td>
              </tr>
              <tr>
                <th scope="row">Harga Selisih</th>
                <td>Rp 3.000.000</td>
              </tr>
              <tr>
                <th scope="row">Riwayat Hasil Penawaran Supplier</th>
                <td>Tidak bisa Maximal Rp 67.000.000,-</td>
              </tr>
              <tr>
                <th scope="row">Riwayat Evaluasi ke Supplier</th>
                <td>Apa bisa diturunkan ke Rp 65.000.000,-</td>
              </tr>
              <tr>
                <th scope="row">Bukti Transfer</th>
                <td>
                  <img src="{{ asset('image/struk.jpg') }}" alt="" width="200">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-2">
        <img src="{{ asset('logo/ikea.svg') }}" alt="">
    </div>
    <div class="col">
        <h3 class="">CV Merah Putih</h3>
        <p class="card-text">Supplier</p>
    </div>
  </div>
  <div class="row pt-4">
    <table class="table table-hover">
        <tbody>
          <tr>
            <td>Kode</td>
            <td>Sup-1</td>
          </tr>
          <tr>
            <td>Nama Perusahaan</td>
            <td>CV Merah Putih</td>
          </tr>
          <tr>
            <td>NPWP</td>
            <td>01.234.567.8-123.000</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>Jl.Simpang Kanan Sidoarjo</td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td>0895642343678</td>
          </tr>
          <tr>
            <td>Nara Hubung</td>
            <td>Bapak Budi</td>
          </tr>
          <tr>
            <td>Bidang Usaha</td>
            <td>Komputer</td>
          </tr>
          <tr>
            <td>No Rekening</td>
            <td>9823947</td>
          </tr>
          <tr class="table-info">
            <td>Nilai Kontrak</td>
            <td>Rp. 50.000.000</td>
          </tr>
          <tr>
            <td>File</td>
            <td><a href="">Cetak Berita Acara</a></td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="accordion mt-2" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
          Hasil Evaluasi : CV Merah Putih
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">Harga Penawaran</th>
                <td>Rp 70.000.000</td>
              </tr>
              <tr>
                <th scope="row">Harga Terkoreksi</th>
                <td>Rp 67.000.000</td>
              </tr>
              <tr>
                <th scope="row">Harga Selisih</th>
                <td>Rp 3.000.000</td>
              </tr>
              <tr>
                <th scope="row">Riwayat Hasil Penawaran Supplier</th>
                <td>Tidak bisa Maximal Rp 67.000.000,-</td>
              </tr>
              <tr>
                <th scope="row">Riwayat Evaluasi ke Supplier</th>
                <td>Apa bisa diturunkan ke Rp 65.000.000,-</td>
              </tr>
              <tr>
                <th scope="row">Bukti Transfer</th>
                <td>
                  <img src="{{ asset('image/struk.jpg') }}" alt="" width="200">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center mt-3">
    <a href="{{ route('warek.pengadaanBarang.pesertaPengadaan') }}" class="btn btn-sm btn-warning">Kembali</a>
  </div>
</div>
@endsection