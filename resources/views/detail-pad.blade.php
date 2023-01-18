@extends('layouts/main')

@section('sidebar')
<nav class="pcoded-navbar">
  <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
  <div class="pcoded-inner-navbar main-menu">
      <div class="">
          <div class="main-menu-header">
              <img class="img-80 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
              <div class="user-details">
                  <span id="more-details">Admin</span>
              </div>
          </div>
      </div>
      <div class="p-15 p-b-0">
      </div>
      <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Main</div>
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
          <li class="">
              <a href="/detail-master-data" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
      </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="active">
                <a href="arsip-pad" class="waves-effect waves-dark">
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
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Arsip Perubahan Anggaran Dasar Koperasi dan UKM</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Arsip PAD</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

  <div class="pcoded-inner-content">
    <!-- Main-body start -->
                          <!-- Hover table card start -->
                          <div class="card">
                              <div class="card-header">
                                <h5>File Arsip PAD (Perubahan Anggaran Dasar)</h5>
                                <div class="card-header-right">
                                  <ul class="list-unstyled card-option">
                                    <li>
                                      <i class="fa fa fa-wrench open-card-option"></i>
                                    </li>
                                    <li>
                                      <i class="fa fa-window-maximize full-card"></i>
                                    </li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>
                                    <li><i class="fa fa-trash close-card"></i></li>
                                  </ul>
                                </div>
                              </div>
                              <div class="card-block table-border-style">
                                <div class="table-responsive">
                            <table id="example" class="table table-hover">
  
      <thead>
        <tr>
            <th data-field="prenom" data-filter-control="input" data-sortable="true">No</th>
            <th data-field="examen" data-filter-control="select">File Arsip PAD</th>
        </tr>
     </thead>
    <tbody>
        <tr>
          <th scope="row">1</th>
          <td>
            <a href="/detail-pad"><img src="assets/images/pdf.png" alt="" width="20px">Padang_04_Koperasi Solidarity Infinity_PAD_2020</a>
        </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>
              <a href="/detail-pad"><img src="assets/images/pdf.png" alt="" width="20px">Padang_04_Koperasi Solidarity Infinity_PAD_2021</a>
          </td>
        </tr>
        
        <tr>
            <th scope="row">3</th>
            <td>
              <a href="/detail-pad"><img src="assets/images/pdf.png" alt="" width="20px">Padang_04_Koperasi Solidarity Infinity_PAD_2022</a>
          </td>
        </tr>


@endsection