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
                                {{-- <ul class="list-unstyled card-option">
                                    <li>
                                        <i class="fa fa fa-wrench open-card-option"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-window-maximize full-card"></i>
                                    </li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                    <li><i class="fa fa-trash close-card"></i></li>
                                </ul> --}}
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="example">
                                                <div class="page-header-breadcrumb">
                                                    <ul>
                                                        <a href="/tambah-koperasi"><button class="btn btn-tambah-size waves-effect waves-light btn-primary" style="float: right; margin-left:20px">
                                                            <li class="breadcrumb-item">
                                                                <i class="icofont icofont-plus"></i>
                                                        </li>
                                                        Tambah Koperasi</button></a>
                                                    </ul>
                                                </div>
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
                                                    <a href="/detail-koperasi"><img src="assets/images/info.png" alt="" width="30px"></a>
                                                    <a href="/dashboard-admin"><img src="assets/images/delete.png" alt="" width="30px" style="margin-left: 40px"></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Hover table card end -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection