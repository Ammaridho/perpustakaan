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
                        <td>id</td>
                        <td>penulis</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penulisBanyak as $penulis)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penulis->penulis }}</td>           
                        <td>
                        <a href="{{ URL::to('penulis/prosesHapus') }}?id={{ $penulis->id }}">hapus</a>    
                        <a href="{{ URL::to('penulis/edit') }}?id={{ $penulis->id }}">edit</a>   
                        </td>             
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
