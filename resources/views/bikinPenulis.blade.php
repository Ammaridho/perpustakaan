<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bikin Penulis</title>
    </head>
    <body>
        <div>
            <form action="{{ URL::to('penulis/prosesBikin') }}" method="post">
                Nama Penulis : 
                <input type="text" name="namaPenulis">
                <button type="submit">Tambah</button>
                {{ csrf_field() }}
            </form>
        </div>
    </body>
</html>
