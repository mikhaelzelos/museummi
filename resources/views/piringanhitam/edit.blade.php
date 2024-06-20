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

                <form action="{{ route('piringanhitam.update', $piringanhitam->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nomor_regist">nomor_regist:</label>
                        <input type="text" id="nomor_regist" name="nomor_regist" class="form-control" placeholder="nomor_regist" value="{{ $piringanhitam->nomor_regist}}">
                    </div>

                    <div class="form-group">
                        <label for="penyumbang">Penyumbang:</label>
                        <input type="text" id="penyumbang" name="penyumbang" class="form-control" placeholder="Tanggal Masuk"  value="{{ $piringanhitam->penyumbang}}">
                    </div>

                    <div class="form-group">
                        <label for="tgl_masuk">tgl_masuk:</label>
                        <input type="text" id="tgl_masuk" name="tgl_masuk" class="form-control" placeholder="tgl_masuk"  value="{{ $piringanhitam->tgl_masuk}}">
                    </div>

                    <div class="form-group">
                        <label for="cover">Cover:</label>
                        <input type="text" id="cover" name="cover" class="form-control" placeholder="Cover"  value="{{ $piringanhitam->cover}}">
                    </div>

                    <div class="form-group">
                        <label for="lagu">lagu:</label>
                        <input type="text" id="lagu" name="lagu" class="form-control" placeholder="lagu"  value="{{ $piringanhitam->lagu}}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control" placeholder="deskripsi"  value="{{ $piringanhitam->deskripsi}}">
                    </div>

                    <div class="form-group">
                        <label for="rak">Rak:</label>
                        <input type="text" id="rak" name="rak" class="form-control" placeholder="Rak"  value="{{ $piringanhitam->rak}}">
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
