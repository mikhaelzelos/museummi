@extends('main')
@section('container')
<div class="col-md-10 p-5 pt-2">
    <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">Buku</h3>
    <hr class="border border-dark border-1 opacity-30">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Data Buku</h2>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="/buku/create">
                                <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ISBN</th>
                            <th>Tgl Masuk</th>
                            <th>Judul</th>
                            <th>Isi Buku</th>
                            <th>Deskripsi</th>
                            <th>Rak</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bukus as $buku)
                        <tr>
                            <td>{{ $buku->id }}</td>
                            <td>{{ $buku->isbn }}</td>
                            <td>{{ $buku->tgl_masuk }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->isi_buku }}</td>
                            <td>{{ $buku->deskripsi }}</td>
                            <td>{{ $buku->rak }}</td>
                            <td>
                                <a href="/buku/edit/{{$buku->id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
                <form action="{{ route('buku.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">No</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn">
                    </div>
                    <div class="form-group">
                        <label for="tgl_masuk">Tgl Masuk</label>
                        <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi_buku">Isi Buku</label>
                        <input type="text" class="form-control" name="isi_buku" id="isi_buku">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                    </div>
                    <div class="form-group">
                        <label for="rak">Rak</label>
                        <input type="text" class="form-control" name="rak" id="rak">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
