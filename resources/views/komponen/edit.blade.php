@extends('main')
@section('container')
<div class="row justify-content-center align-items-center" style="height: 100vh;"> <!-- Centering content horizontally and vertically -->
    <div class="col-lg-10"> <!-- Adjust column width as needed -->
        <div class="card" style="border-radius: 39px;">
            <div class="card-header">
                <h2 class="text-center">Edit</h2>
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

                <form action="{{ route('komponen.update', $komponen->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama_komponen">nama_komponen:</label>
                        <input type="text" id="nama_komponen" name="nama_komponen" class="form-control" placeholder="nama_komponen" value="{{ $komponen->nama_komponen}}">
                    </div>

                    <div class="form-group">
                        <label for="dekripsi">deskripsi:</label>
                        <input type="text" id="dekripsi" name="dekripsi" class="form-control" placeholder="dekripsi"  value="{{ $komponen->dekripsi}}">
                    </div>

                    <div class="form-group">
                        <label for="kuantitas">kuantitas:</label>
                        <input type="text" id="kuantitas" name="kuantitas" class="form-control" placeholder="kuantitas"  value="{{ $komponen->kuantitas}}">
                    </div>

                    <div class="form-group">
                        <label for="rak">rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="rak"  value="{{ $komponen->rak}}">
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
