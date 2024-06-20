@extends('main')
@section('container')
<div class="col-md-10 p-5 pt-2">
    <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">CD</h3>
    <hr class="border border-dark border-1 opacity-30">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Data CD</h2>
                        </div>
                        <div class="col-sm-4 text-end">
                            <a href="/cd/create" class="btn btn-info add-new">
                                <i class="fa fa-plus"></i> Add New
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Regist</th>
                            <th>Penyumbang</th>
                            <th>Tanggal Masuk</th>
                            <th>Judul</th>
                            <th>Lagu</th>
                            <th>Deskripsi</th>
                            <th>Rak</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cds as $cd)
                        <tr>
                            <td>{{ $cd->id }}</td>
                            <td>{{ $cd->nomor_regist }}</td>
                            <td>{{ $cd->penyumbang }}</td>
                            <td>{{ $cd->tgl_masuk }}</td>
                            <td>{{ $cd->judul }}</td>
                            <td>{{ $cd->lagu }}</td>
                            <td>{{ $cd->deskripsi }}</td>
                            <td>{{ $cd->rak }}</td>
                            <td>
                                <a href="/cd/edit/{{ $cd->id }}" class="edit" title="Edit" data-toggle="tooltip">
                                    <i class="material-icons">&#xE254;</i>
                                </a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                    <i class="material-icons">&#xE872;</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal for adding new records -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="id">No</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="nomor_regist">Nomor Regist</label>
                        <input type="text" class="form-control" name="nomor_regist" id="nomor_regist">
                    </div>
                    <div class="form-group">
                        <label for="penyumbang">Penyumbang</label>
                        <input type="text" class="form-control" name="penyumbang" id="penyumbang">
                    </div>
                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="lagu">Lagu</label>
                        <input type="text" class="form-control" name="lagu" id="lagu">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="rak">Rak</label>
                        <input type="text" class="form-control" name="rak" id="rak">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
