<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Buku</title>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <tr>
                        <td>judul</td>
                        <td>tahun</td>
                        <td>penerbit</td>
                        <td>kategori</td>
                        <td>penulis</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bukuBanyak as $buku)
                    <tr>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->tahun }}</td>
                        <td>{{ $buku->penerbit->penerbit }}</td>
                        <td>{{ $buku->kategori->kategori }}</td>
                        <td>
                        @foreach($buku->penulis as $satuanPenulis)
                            {{ $satuanPenulis->penulis }} <br>
                        @endforeach
                        </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
