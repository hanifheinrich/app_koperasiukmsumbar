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
                <a href="/arsip-pendirian" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Arsip Pendirian</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="active">
<<<<<<<<< Temporary merge branch 1
                <a href="/arsip-pad" class="waves-effect waves-dark">
=========
                <a href="arsip-pad" class="waves-effect waves-dark">
>>>>>>>>> Temporary merge branch 2
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
                          <table id="table" 
                          data-toggle="table"
                          data-search="true"
                          {{-- data-filter-control="true"  --}}
                          {{-- data-show-export="true" --}}
                          data-click-to-select="true"
                          data-toolbar="#toolbar">

    <thead>
      <tr>
          <th data-field="prenom" data-filter-control="input" data-sortable="true">No</th>
          <th data-field="location" data-filter-control="select" >Nama Koperasi/ukm</th>
          <th data-field="date" data-filter-control="select" >Wilayah </th>
          <th data-field="examen" data-filter-control="select">File Arsip PAD</th>
      </tr>
   </thead>
  <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Koperasi Solidarity Infinity</td>
        <td>Kota Padang</td>
        <td>
          <a href="/dashboard-admin"><img src="assets/images/pdf.png" alt="" width="30px">Lihat!</a>
      </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Koperasi Sejahtera Makmur</td>
        <td>Kabupaten Pasaman Barat</td>
        <td>
          <a href="/dashboard-admin"><img src="assets/images/pdf.png" alt="" width="30px">Lihat!</a>
      </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Koperasi Papa Mama</td>
        <td>Kota Solok</td>
        <td>
          <a href="/dashboard-admin"><img src="assets/images/pdf.png" alt="" width="30px">Lihat!</a>
      </td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Koperasi Friendzone</td>
        <td>Kota Payakumbuh</td>
        <td>
          <a href="/dashboard-admin"><img src="assets/images/pdf.png" alt="" width="30px">Lihat!</a>
      </td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Koperasi Menua Bersama</td>
        <td>Kabupaten Pesisir Selatan</td>
        <td>
          <a href="/dashboard-admin"><img src="assets/images/pdf.png" alt="" width="30px">Lihat!</a>
      </td>
      </tr>
  </tbody>
</table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.js"></script>


@endsection