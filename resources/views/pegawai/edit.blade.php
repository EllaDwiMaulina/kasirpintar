<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Pegawai</label>
                                <input type="text" 
                                       class="form-control @error('nama_pegawai') is-invalid @enderror" 
                                       name="nama_pegawai" 
                                       value="{{ old('nama_pegawai', $pegawai->nama_pegawai) }}" 
                                       placeholder="Nama Pegawai">
                                @error('nama_pegawai')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">Sift Awal</label>
                                <input type="time" 
                                       class="form-control @error('sift_awal') is-invalid @enderror" 
                                       name="sift_awal" 
                                       value="{{ old('sift_awal', $pegawai->sift_awal) }}">
                                @error('sift_awal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Sift Akhir</label>
                                <input type="time" 
                                       class="form-control @error('sift_akhir') is-invalid @enderror" 
                                       name="sift_akhir" 
                                       value="{{ old('sift_akhir', $pegawai->sift_akhir) }}">
                                @error('sift_akhir')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <a href="{{ route('pegawai.index') }}" class="btn btn-md btn-secondary">KEMBALI</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
