<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Edit Penulis</title>
    </head>
    <body>
        <div>
            <form action="{{ URL::to('penulis/prosesEdit') }}" method="post">
                Nama Penulis : 
                <input type="text" name="namaPenulis" value="{{ $penulis->penulis }}">
                <input type="hidden" name="id" value=" {{ $penulis->id }}">
                <button type="submit">Edit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </body>
</html>
