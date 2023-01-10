@extends('layouts.dashboard')
@section('page-title') Kategori @endsection
@section('content')
<div class="container-fluid">
    <div class="mb-4">
        <form action="">
            <div class="form-group row align-items-center">
                <div class="col-sm-4 mt-2 mt-mb-0">
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Kategori Barang Baru">
                </div>
                <div class="col-sm-2 mt-2 mt-mb-0">
                    <input type="text" class="form-control" id="nama" placeholder="Kode Kategori">
                </div>
                <div for="nama" class="col-sm-2 mt-2 mt-mb-0"><button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Insert Data</button></div>
            </div>
        </form>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Tanggal Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TIK</td>
                            <td>Teknologi Informasi</td>
                            <td>7 May 2021 10:23</td>
                            <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editKategoriModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteKategoriModal">Delete</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>ATK</td>
                            <td>Alat Tulis Kantor</td>
                            <td>7 May 2021 10:23</td>
                            <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editKategoriModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteKategoriModal">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>FNT</td>
                            <td>Furniture</td>
                            <td>7 May 2021 10:23</td>
                            <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editKategoriModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteKategoriModal">Delete</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection

@section('modal')
<div class="modal fade" id="editKategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <label for="kode_kategori" class="col-sm-3 col-form-label">Kode Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="kode_kategori" value="TIK">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_kategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_kategori" value="Teknologi Informasi">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="button" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteKategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">Apakah anda yakin untuk menghapus data ini?</div>
            <div class="modal-footer justify-content-center">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection