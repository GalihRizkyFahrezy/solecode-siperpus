<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>siperpus</title>
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>anggota id</td>
                                <td>buku id</td>
                                <td>tanggal pinjam</td>
                                <td>tanggal batas kembali</td>
                                <td>denda</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->anggota_id}}</td>
                                    <td>{{$row->buku_id}}</td>
                                    <td>{{$row->tanggal_pinjam}}</td>
                                    <td>{{$row->tanggal_batas_kembali}}</td>
                                    <td>
                                        <a href="/denda/{{$row->anggota_id}}" class="btn btn-primary">total denda</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>