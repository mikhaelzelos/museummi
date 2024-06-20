@extends('main')
@section('container')
<div class="col-md-10 p-5 pt-2">
    <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">Komponen Audio</h3>
    <hr class="border border-dark border-1 opacity-30">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Data Komponen</h2>
                        </div>
                        <div class="col-sm-4">
                        <a href="/komponen/create">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Komponen</th>
                            <th>Deskripsi</th>
                            <th>Kuantitas</th>
                            <th>Rak</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($komponens as $komponen)
                        <tr>
                            <td>{{ $komponen->id }}</td>
                            <td>{{ $komponen->nama_komponen }}</td>
                            <td>{{ $komponen->dekripsi}}</td>
                            <td>{{ $komponen->kuantitas }}</td>
                            <td>{{ $komponen->rak }}</td>
                            <td>
                                <a href="/komponen/edit/{{$komponen->id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
                    <div class="form-group">
                        <label>No</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>
                    <div class="form-group">
                        <label>Nomor Komponen</label>
                        <input type="text" class="form-control" name="nama_komponen" id="nama_komponen">
                    </div>
                    <div class="form-group">
                        <label>deskripsi</label>
                        <input type="text" class="form-control" name="dekripsi" id="dekripsi">
                    </div>

                    <div class="form-group">
                        <label>Kuantitas</label>
                        <input type="text" class="form-control" name="kuantitas" id="kuantitas">
                    </div>
                    <div class="form-group">
                        <label>rak</label>
                        <input type="text" class="form-control" name="rak" id="rak">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
        </div>
    </div>
</div>



@endsection
