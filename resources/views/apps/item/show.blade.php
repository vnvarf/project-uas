<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table thead {
            background-color: #343a40;
            color: #fff;
        }
        .modal-header {
            background-color: #343a40;
            color: #fff;
        }
        .modal-body img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Barang</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->harga }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailModal{{ $loop->iteration }}">
                            Detail
                        </button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="detailModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data Barang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if ($item->image)
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('storage/images/' . $item->image) }}" alt="{{ $item->nama }}" class="img-fluid rounded">
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Nama Barang:</h5>
                                        <p>{{ $item->nama }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Kategori:</h5>
                                        <p>{{ $item->kategori }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Harga:</h5>
                                        <p>{{ $item->harga }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Deskripsi:</h5>
                                        <p>{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Stok:</h5>
                                        <p>{{ $item->stok }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Unit:</h5>
                                        <p>{{ $item->unit->name }}</p>
                                    </div>
                                </div>
                                <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
