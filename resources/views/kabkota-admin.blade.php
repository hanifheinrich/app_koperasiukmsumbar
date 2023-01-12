@extends('layouts/main')

@section('konten')
<div class="pcoded-inner-content">
    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Caption Breadcrumb card start -->
                <div class="card">
                    <div class="card-block caption-breadcrumb">
                        <div class="breadcrumb-header" style="font-size: 40px">
                            <img style="margin-right: 30px;" src="assets/images/logo_padang.png" alt="" width="70" height="75"/><b>Koperasi & UKM</b>
                            <div style="font-size: 40px">
                            </div>
                        </div>
                </div>
                </div>
                <!-- Caption Breadcrumb card end -->
                <!-- Hover table card start -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div style="margin-left: 1%">
                                    <div class="dataTables_length bs-select" id="dtBasicExample_length">
                                        <label>
                                            <select name="dtBasicExample_length" aria-controls="dtBasicExample" class="custom-select custom-select-sm form-control form-control-sm" fdprocessedid="9brkq8">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="30">30</option>
                                                <option value="40">40</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div style="margin-left: 5%">
                                    <div id="dtBasicExample_filter" class="dataTables_filter">
                                        <label>
                                            <input type="search" class="form-control form-control-sm"placeholder aria-controls="selectedColumn">
                                        </label>
                                    </div>
                                </div>
                                <div class="card-header-right">
                                    <a class="btn btn-primary float-right mt-2" href="#" role="button">Tambah Siswa</a>
                                </div>
                            </div>
                        {{-- <h5>Hover Table</h5>
                        <span
                            >use class <code>table-hover</code> inside table
                            element</span
                        > --}}
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
                            <table class="table table-hover">
                            <thead>
                                <tr>
                                <th>No.</th>
                                <th>Nama Koperasi dan UKM</th>
                                <th>Kabupaten/Kota</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>e</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                </tr>
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
@endsection