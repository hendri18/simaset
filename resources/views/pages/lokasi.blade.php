@extends('layouts.dashboard')
@section('page-title') Lokasi @endsection
@section('content')
<div class="container-fluid">
    <div class="mb-4"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addLokasiModal">Add</button></div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lokasi</th>
                            <th>Tanggal Update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ruang Direktur</td>
                            <td>10 Oct 2022 10:10</td>
                            <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editLokasiModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteLokasiModal">Delete</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ruang IT</td>
                            <td>10 Oct 2022 10:10</td>
                            <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editLokasiModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteLokasiModal">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ruang Supervisor</td>
                            <td>10 Oct 2022 10:10</td>
                            <td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editLokasiModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteLokasiModal">Delete</button></td>
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
<div class="modal fade" id="addLokasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group row">
                        <label for="nama_lokasi" class="col-sm-3 col-form-label">Nama Lokasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_lokasi">
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
<div class="modal fade" id="editLokasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <label for="nama_lokasi" class="col-sm-3 col-form-label">Nama Lokasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_lokasi" value="Ruang Direktur">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-3 col-form-label">Lokasiname</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" value="hendri">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-3 col-form-label">Password Baru</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password">
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
<div class="modal fade" id="deleteLokasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin untuk menghapus data ini?</div>
            <div class="modal-footer justify-content-center">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection