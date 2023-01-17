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
                <li class="active">
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
                <div class="col-md-11">
                    <div class="page-header-title">
                        <h2 class="m-b-10">Profil</h2>
                        <br>
                        <h6 class="m-b-0">Dinas Koperasi & UKM Provinsi Sumatera Barat</h6>
                    </div>
                    <br>
                    <div class="container px-4">
                        <div class="row gx-5">
                          <div class="col">
                                <img src="assets/images/LAMBANG-KOPERASI.png" width="200px">
                            </div>
                            <div class="col">
                                <h5>Motto :</h5>
                                <br>
                                <p>“Kami siap berubah”</p>
                                <br>
                                <h5>Visi :</h5>
                                <br>
                                <p>Mewujudkan Koperasi dan UMKM yang Tangguh, Berdaya Saing Tinggi, Berorientasi Pasar dan Berbasis Sumber Daya Lokal</p>
                            </div>
                          <div class="col">
                            <h5>Misi :</h5>
                            <ol type="1">
                                <li>Meningkatkan kualitas kelembagaan Koperasi dan kesadaran masyarakat dalm berkoperasi.</li>
                                <li>Meningkatkan kapasitas Koperasi untuk mengelola potensi ekonomi serta usaha simpan pinjam.</li>
                                <li>Mengembangkan iklim usaha yang kondusif dan mendorong peningkatan daya saing produk-produk UMKM.</li>
                            </ol>
                        </div>
                      </div>

                      <div class="row gx-5" style="margin-top: 20px;">
                      <form action="">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                placeholder="diskop@sumbarprov.go.id" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                placeholder="Jl. Khatib Sulaiman No. 11 Padang" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Telepon:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                placeholder="0751 - 7055292" readonly>
                            </div>
                        </div>

                    <div class="container">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contohModal">Edit Profil</button>
                        <div class="modal fade" id="contohModal" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Profil</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Telepon</label>
                                            <input type="notelepon" name="" class="form-control">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal">Edit Password</button>
                        <div class="modal fade" id="modal" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Password</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                  <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Masukkan Password Baru</label>
                                            <input type="email" name="" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Konfirmasi Password Baru</label>
                                            <input type="text" name="" class="form-control">
                                        </div>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">SIMPAN</button>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                        
                      </form>
                      </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

</div>
@endsection