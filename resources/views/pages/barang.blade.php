@extends('layouts.dashboard')
@section('page-title') Barang @endsection
@section('content')
<div class="container-fluid">
    <div class="mb-4"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addBarangModal">Add</button></div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama Barang</th>
                            <th>Merk Barang</th>
                            <th>Tahun Perolehan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Furniture</td>
                            <td>Kursi Direktur</td>
                            <td>Chitose</td>
                            <td>2020</td>
                            <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailBarangModal">Detail</button> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editBarangModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteBarangModal">Delete</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Teknologi Informasi</td>
                            <td>Printer Epson L3110</td>
                            <td>Epson</td>
                            <td>2021</td>
                            <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailBarangModal">Detail</button> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editBarangModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteBarangModal">Delete</button></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Teknologi Informasi</td>
                            <td>LCD LG 19"</td>
                            <td>LG</td>
                            <td>2020</td>
                            <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailBarangModal">Detail</button> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editBarangModal">Edit</button> <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteBarangModal">Delete</button></td>
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
<div class="modal fade" id="addBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <label for="kategori_id" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="1">Teknologi Informasi</option>
                                <option value="2">Alat Tulis Kantor</option>
                                <option value="3">Furniture</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk_barang" class="col-sm-3 col-form-label">Merk Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="merk_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun Perolehan</label>
                        <div class="col-sm-9">
                            <select name="tahun" id="tahun" class="form-control">
                                @foreach($years as $year)
                                <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi_id" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <select name="lokasi_id" id="lokasi_id" class="form-control">
                                <option value="1">Ruang Direktur</option>
                                <option value="2">Ruang IT</option>
                                <option value="3">Ruang Supervisor</option>
                            </select>
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
<div class="modal fade" id="editBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                        <label for="kategori_id" class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="1">Teknologi Informasi</option>
                                <option value="2">Alat Tulis Kantor</option>
                                <option value="3" selected>Furniture</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_barang" value="Kursi Direktur">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk_barang" class="col-sm-3 col-form-label">Merk Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="merk_barang" value="Chitose">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-3 col-form-label">Tahun Perolehan</label>
                        <div class="col-sm-9">
                            <select name="tahun" id="tahun" class="form-control">
                                @foreach($years as $year)
                                <option value="{{ $year }}" {{ $year == '2020' ? 'selected' : '' }}>{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi_id" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <select name="lokasi_id" id="lokasi_id" class="form-control">
                                <option value="1" selected>Ruang Direktur</option>
                                <option value="2">Ruang IT</option>
                                <option value="3">Ruang Supervisor</option>
                            </select>
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

<div class="modal fade" id="detailBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card border-left-primary mb-3">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kategori</div>
                                <div>Furniture</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-left-primary mb-3">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nama Barang</div>
                                <div>Kursi Direktur</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-left-primary mb-3">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Merk Barang</div>
                                <div>Chitose</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-left-primary mb-3">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tahun Perolehan</div>
                                <div>2020</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border-left-primary mb-3">
                            <div class="card-body">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Lokasi Barang</div>
                                <div>Ruang Direktur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteBarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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