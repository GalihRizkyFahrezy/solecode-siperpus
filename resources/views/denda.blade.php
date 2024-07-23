<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>siperpus</title>
</head>
<body>
    <div class="container mt-3 col-6">
        <h4 class="d-flex justify-content-center">
            <b>
                Denda
            </b>
        </h4>
        <div class="card">
            <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>anggota id</td>
                                <td>buku id</td>
                                <td>batas maksimum pinjaman</td>
                                <td>terlambat mengembalikan</td>
                                <td>denda</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($denda as $denda)
                                <tr>
                                    <?php
                                    $terlambat = $denda->denda / 1000;
                                    ?>
                                    <td>{{$denda->id}}</td>
                                    <td>{{$denda->nama}}</td>
                                    <td>{{$denda->buku_id}}</td>
                                    <td>{{$denda->batas_pinjam}} hari</td>
                                    <td>{{$terlambat}} hari</td>
                                    <td>{{$denda->denda}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <h5>
                        total denda adalah : {{$totaldenda}}
                    </h5>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>