<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Suplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
    <div class="container mt-5">
        <h3 class="text-center my-4">Daftar Suplier</h3>
        
        <!-- Tombol Tambah Suplier -->
        <a href="{{ route('suplier.create') }}" class="btn btn-success mb-3">Tambah Suplier</a>
        
        <!-- Tabel Data Suplier -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID Suplier</th>
                    <th scope="col">Nama Suplier</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($supliers as $suplier)
                    <tr>
                        <td>{{ $suplier->id_suplier }}</td>
                        <td>{{ $suplier->nama }}</td>
                        <td>{{ $suplier->alamat }}</td>
                        <td>{{ $suplier->email }}</td>
                        <td>{{ $suplier->no_hp }}</td>
                        <td class="text-center">
                            <!-- Tombol Edit -->
                            <a href="{{ route('suplier.edit', $suplier->id_suplier) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Form Hapus -->
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" 
                                  action="{{ route('suplier.destroy', $suplier->id_suplier) }}" 
                                  method="POST" 
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Suplier tidak tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>