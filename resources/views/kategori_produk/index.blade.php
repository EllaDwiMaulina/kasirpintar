<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Kategori Produk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
  <div class="container mt-5">
    <h3 class="text-center my-4">Daftar Kategori Produk</h3>

    <a href="{{ route('kategori_produk.create') }}" class="btn btn-success mb-3">Tambah Kategori Produk</a>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID Kategori</th>
          <th scope="col">Kode Produk</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Harga</th>
          <th scope="col">Gambar</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($kategori_produks as $kategori_produk)
          <tr>
            <td>{{ $kategori_produk->id }}</td>
            <td>{{ $kategori_produk->kode_produk }}</td>
            <td>{{ $kategori_produk->nama_produk }}</td>
            <td>{{ $kategori_produk->harga }}</td>
            <td>
              @if ($kategori_produk->image)
                <img src="{{ asset('storage/' . $kategori_produk->image) }}" alt="Image" width="50">
              @else
                <span>Tidak ada gambar</span>
              @endif
            </td>
            <td class="text-center">
              <a href="{{ route('kategori_produk.edit', $kategori_produk->id) }}" class="btn btn-primary btn-sm">Edit</a>

              <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                    action="{{ route('kategori_produk.destroy', $kategori_produk->id) }}"
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
            <td colspan="6" class="text-center">Data Kategori Produk tidak tersedia.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</body>
</html>