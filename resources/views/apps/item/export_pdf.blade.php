<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipe List</title>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>
</head>
<body>
    <h1>Recipe List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Resep</th>
                <th scope="col">Nama Resep</th>
                <th scope="col">Desc</th>
                <th scope="col">Estimasi Pembuatan</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)
                <tr>
                    <td align="center">{{ $index + 1 }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->desc }}</td>
                    <td>{{ $item->price }} Menit</td>
                    <td><img src="{{ asset('/storage/images/' . $item->image_item) }}" style="height: 50px;width:100px;"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
