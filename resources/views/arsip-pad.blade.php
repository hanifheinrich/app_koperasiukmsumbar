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
        <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
        <ul class="pcoded-item pcoded-left-item">

          <li class="">
                <a href="index.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="">
              <a href="index.html" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                  <span class="pcoded-mtext" data-i18n="nav.dash.main">Profile</span>
                  <span class="pcoded-mcaret"></span>
              </a>
          </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Master Data</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="form-elements-component.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Koperasi & UKM</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Pengarsipan</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="">
                <a href="chart.html" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="active">
                <a href="map-google.html" class="waves-effect waves-dark">
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
                      <h5 class="m-b-10">Arsip Perubahan Anggaran Dasar</h5>
                      <p class="m-b-0">Temukan file arsip perubahan anggaran dasar secara cepat disini</p>
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
<!-- Basic table card start -->
                      <div class="card">
                        <div class="card-header">
                          <h5>Arsip PAD Koperasi dan UKM</h5>
                          <br><br>
                          <form action="" method="post">
                            <div class="input-grup">
                              <input type="text" name="cari" class="form-control">
                              <div class="input-group-prepend">
                                <button type="submit" name="search" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                              </div>
                            </div>
                        </div>
                          
                        <div class="card-block table-border-style">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Nama Koperasi dan UKM</th>
                                  <th>Wilayah</th>
                                  <th>File</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Koperasi Solidarity Infinity</td>
                                  <td>Kota Padang</td>
                                  <td><img src="assets/images/pdf.png" width="30dp"></td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Koperasi Sejahtera Makmur</td>
                                  <td>Kabupaten Pasaman Barat</td>
                                  <td><img src="assets/images/pdf.png" width="30dp"></td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Koperasi Papa Mama</td>
                                  <td>Kota Solok</td>
                                  <td><img src="assets/images/pdf.png" width="30dp"></td>
                                </tr>
                                <tr>
                                  <th scope="row">4</th>
                                  <td>Koperasi Friendzone</td>
                                  <td>Kota Payakumbuh</td>
                                  <td><img src="assets/images/pdf.png" width="30dp"></td>
                                </tr>
                                <tr>
                                  <th scope="row">5</th>
                                  <td>Koperasi Menua Bersama</td>
                                  <td>Kabupaten Pesisir Selatan</td>
                                  <td><img src="assets/images/pdf.png" width="30dp"></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!-- Basic table card end -->
//<?php
  //if (isset($_POST['search'])){
    //$cari = $_POST['cari'];
    //$query =  mysql_query("select * from tabel_wilayah where wilayah like '%$cari%'");
  //}
  ///else
  //{
    //$query = mysql_query("select * from tabel_wilayah");
  //}
  //$query = mysql_query("select * from tabel_wilayah");
  //$no = 1;
  //while($data = mysql_fetch_array($query))
    //?>
  
  <div class="main-body">
      <div class="page-wrapper">
      </div>
      <div id="styleSelector"> </div>
  </div>
</div>
</div>

@endsection