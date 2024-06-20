@extends('main')
@section('container')
<div class="col-md-10 p-5 pt-2">
    <h3 class="dashboard" style="margin-left: 1%; margin-top: 2%;">Instrumen Tradisional</h3>
    <hr class="border border-dark border-1 opacity-30">
    <div class="container-lg">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Data Instrumen Tradisional</h2>
                        </div>
                        <div class="col-sm-4">
                        <a href="/instrumentradisional/create">
                            <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                        </a>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Regist</th>
                            <th>Nama Instrumen</th>
                            <th>Daerah</th>
                            <th>Penyumbang</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($instrumentradisionals as $instrumentradisional)
                        <tr>
                            <td>{{ $instrumentradisional->id }}</td>
                            <td>{{ $instrumentradisional->nomor_regist }}</td>
                            <td>{{ $instrumentradisional->nama_instrumen }}</td>
                            <td>{{ $instrumentradisional->daerah }}</td>
                            <td>{{ $instrumentradisional->penyumbang }}</td>
                            <td>{{ $instrumentradisional->quantity }}</td>
                            <td>
                            <a href="/instrumentradisional/edit/{{$instrumentradisional->id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
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
                        <label>nomor_regist</label>
                        <input type="text" class="form-control" name="nomor_regist" id="nomor_regist">
                    </div>
                    <div class="form-group">
                        <label></label>nama_instrumen
                        <input type="text" class="form-control" name="nama_instrumen" id="nama_instrumen">
                    </div>
                    <div class="form-group">
                        <label>daerah</label>
                        <input type="text" class="form-control" name="daerah" id="daerah">
                    </div>
                    <div class="form-group">
                        <label>Penyumbang</label>
                        <input type="text" class="form-control" name="penyumbang" id="penyumbang">
                    </div>
                    <div class="form-group">
                        <label>quantity</label>
                        <input type="text" class="form-control" name="quantity" id="quantity">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
