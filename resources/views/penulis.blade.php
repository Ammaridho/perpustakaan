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
                    </tr>
                </thead>
                <tbody>
                    @foreach($penulisBanyak as $penulis)
                    <tr>
                        <td>{{ $penulis->id }}</td>
                        <td>{{ $penulis->penulis }}</td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
