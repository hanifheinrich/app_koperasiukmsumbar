@extends('layouts/main')

@section('sidebar')
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <div class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="assets/images/foto_profil.png" alt="User-Profile-Image">
                <div class="user-details">
                    <span id="more-details">Admin</span>
                </div>
            </div>
        </div>
        <div class="p-15 p-b-0">
        </div>
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
        <ul class="pcoded-item pcoded-left-item">

          <li class="">
                <a href="/dashboard-admin" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
              <a href="/profil" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master Data</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="/detail-master-data" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="/arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="/arsip-pad" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip PAD</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>        
        </ul>
    </div>
</nav>
@endsection

@section('konten')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md">
                    <img src="assets/images/logo_padang.png" width="80px">
                </div>
                <div class="col-md-11">
                    <div class="page-header-title">
                        <h3 class="m-b-10">Koperasi dan UKM</h3>
                        <h5 class="m-b-0">Kota Padang</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                <!-- Hover table card start -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-right">
                                <div class="button-page">
                                    <a href="/dashboard-admin"><button  class="btn waves-effect waves-light btn-primary ">
                                        Tambah Koperasi
                                    </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                @if(session()->has('success'))
                                    {{ session()->get('success') }}
                                @endif
 
                                @if(session()->has('failed'))
                                    {{ session()->get('failed') }}
                                @endif

                                <table class="table table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Koperasi dan UKM</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Wilayah as $dw)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{ $dw->nama_koperasi }}</td>
                                            <td style="text-align: center">
                                                <a href="/dashboard-admin"><img src="assets/images/info.png" alt="" width="30px"></a>
                                                <a href="{{ URL::to('/delete-koperasi') }}/{{ $dw->id_koperasi }}"><img src="assets/images/delete.png" alt="" width="30px" style="margin-left: 40px"></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- Hover table card end -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Modal -->
{{-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah yakin Koperasi dan UKM ini dihapus?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-danger">Iya</button>
        </div>
      </div>
    </div>
  </div> --}}
@endsection