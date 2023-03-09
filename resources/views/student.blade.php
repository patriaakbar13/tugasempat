<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table HTML</title>
  </head>
  <body>
    <table border="1">
      <thead>
        <tr>
          <th>Nama</th>
          <th>NIM</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tugasempat as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->email }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
