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

                <form action="{{ route('majalah.update', $majalah->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="issn">ISSN:</label>
                        <input type="text" id="issn" name="issn" class="form-control" placeholder="ISSN" value="{{ $majalah->issn}}">
                    </div>

                    <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk:</label>
                        <input type="text" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="Tanggal Masuk"  value="{{ $majalah->tgl_masuk}}">
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul:</label>
                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul"  value="{{ $majalah->judul}}">
                    </div>

                    <div class="form-group">
                        <label for="isi_majalah">Isi Majalah:</label>
                        <input type="text" id="isi_majalah" name="isi_majalah" class="form-control" placeholder="Isi Majalah"  value="{{ $majalah->isi_majalah}}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi"  value="{{ $majalah->deskripsi}}">
                    </div>

                    <div class="form-group">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak"  value="{{ $majalah->rak}}">
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
