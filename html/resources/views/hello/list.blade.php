<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>速習Laravel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
  <table class="table">
    @foreach($records as $record)
    <tr>
      <td>{{ $record->title }}</td>
      <td>{{ $record->price }}円</td>
      <td>{{ $record->publisher }}</td>
      <td>{{ $record->published }}</td>
    </tr>
    @endforeach
  </table>
</body>
</html>
