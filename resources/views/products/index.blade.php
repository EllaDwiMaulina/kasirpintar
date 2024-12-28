<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray;">
    <div class="container mt-5">
        <h3 class="text-center my-4">Daftar Produk</h3>
        
        <!-- Tombol Tambah Produk -->
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">Tambah Produk</a>
        
        <!-- Tabel Data Produk -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $products)
                    <tr>
                        <td>{{ $products->id_products }}</td> <!-- Menampilkan ID produk -->
                        <td>{{ $products->products_name }}</td> <!-- Menampilkan Nama Produk -->
                        <td>{{ $products->category }}</td> <!-- Menampilkan Kategori -->
                        <td class="text-center">
                            <!-- Tombol Edit -->
                            <a href="{{ route('products.edit', $products->id_products) }}" class="btn btn-primary btn-sm">Edit</a>

                            <!-- Form Hapus -->
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" 
                                  action="{{ route('products.destroy', $products->id_product) }}" 
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
                        <td colspan="4" class="text-center">Data Produk tidak tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
