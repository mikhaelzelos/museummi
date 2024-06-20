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

                <form action="{{ route('instrumentradisional.update', $instrumentradisional->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nomor_regist">nomor_regist:</label>
                        <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="nomor_regist" value="{{ $instrumentradisional->nomor_regist}}">
                    </div>

                    <div class="form-group">
                        <label for="nama_instrumen">nama_instrumen:</label>
                        <input type="text" id="nama_instrumen" name="nama_instrumen" class="form-control" placeholder="Tanggal Masuk"  value="{{ $instrumentradisional->nama_instrumen}}">
                    </div>

                    <div class="form-group">
                        <label for="daerah">daerah:</label>
                        <input type="text" id="daerah" name="daerah" class="form-control" placeholder="daerah"  value="{{ $instrumentradisional->daerah}}">
                    </div>

                    <div class="form-group">
                        <label for="penyumbang">Penyumbang:</label>
                        <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="penyumbang"  value="{{ $instrumentradisional->penyumbang}}">
                    </div>

                    <div class="form-group">
                        <label for="quantity">quantity:</label>
                        <input type="text" id="quantity" name="quantity" class="form-control" placeholder="quantity"  value="{{ $instrumentradisional->quantity}}">
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
