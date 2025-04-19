<!DOCTYPE html>
<html>
<head>
    <title>Daftar Artikel</title>
</head>
<body>
    <h1>Daftar Artikel</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Penulis</th>
        </tr>
        @foreach ($artikels as $index => $artikel)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $artikel->judul }}</td>
            <td>{{ $artikel->isi }}</td>
            <td>{{ $artikel->penulis }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
