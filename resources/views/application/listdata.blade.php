@include('layout.partials.jobform')
@extends('layout.main')

@section('content')
<div class="content">
    <div class="mx-5 mt-5">
            <div class="w-100 me-4">
                <div class="mb-3">
                    <h5 class="fw-bold">
                        <i class="fas fa-arrow-left me-2"></i>
                        DAFTAR LOWONGAN PEKERJAAN
                    </h5>
                </div>


                <div class="form-group mb-4 d-flex align-items-center">
                    <div class="col-6">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-magnifying-glass"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Cari Apa saja">
                        </div>
                    </div>
                    <div class="col-4 ms-3">
                        <a href="" class="btn btn-secondary py-2 "><i class="fa fa-filter"> filter</i></a>
                        <a href="" class="btn btn-secondary py-2 "><i class="fa fa-trash"></i></a>
                    </div>
                    <div class="col-2">
                        <a href="" class="btn btn-secondary py-2 "><i class="fas fa-plus me-2"> Tambah Lowongan</i></a>
                    </div>
                </div>


             <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <th>No</th>
                        <th>Nama Aset</th>
                        <th>Jenis Aset</th>
                        <th>Harga Satuan (IDR...)</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                        <td>Warung</td>
                        <td>Buangan</td>
                        <td>1.000.000</td>
                        <td><a href="" class="btn btn-outline-success btn-sm py-0">Aktif</a></td>
                        <td>
                            <a href="" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-pen-to-square"></i></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                        <td>Grosir</td>
                        <td>Eceran</td>
                        <td>2.000.000</td>
                        <td><a href="" class="btn btn-outline-success btn-sm py-0">Aktif</a></td>
                         <td>
                            <a href="" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-pen-to-square"></i></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                        <td >Toko</td>
                        <td >Gratisan</td>
                        <td>3.000.000</td>
                         <td><a href="" class="btn btn-outline-success btn-sm py-0">Aktif</a></td>
                         <td>
                            <a href="" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-pen-to-square"></i></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                        <td >Toko</td>
                        <td >Gratisan</td>
                        <td>3.000.000</td>
                         <td><a href="" class="btn btn-outline-success btn-sm py-0">Aktif</a></td>
                         <td>
                            <a href="" class="btn btn-secondary btn-sm"><i class="fas fa-trash"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-pen-to-square"></i></a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>
@endsection