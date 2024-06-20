@extends('main')
@section('container')
<div class="row justify-content-center align-items-center" style="height: 100vh; width :100%;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-8 col-md-10 col-sm-12"> <!-- Adjust column width as needed -->
        <div class="card shadow-sm" style="border-radius: 15px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Add New</h2>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('komponen.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nama_komponen">Nama Komponen:</label>
                        <input type="text" id="nama_komponen" name="nama_komponen" class="form-control" placeholder="Nama Komponen">
                    </div>

                    <div class="form-group">
                        <label for="dekripsi">Deskripsi:</label>
                        <input type="text" id="dekripsi" name="dekripsi" class="form-control" placeholder="Deskripsi">
                    </div>

                    <div class="form-group">
                        <label for="kuantitas">Kuantitas:</label>
                        <input type="text" id="kuantitas" name="kuantitas" class="form-control" placeholder="Kuantitas">
                    </div>

                    <div class="form-group">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak">
                    </div>
                    
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
