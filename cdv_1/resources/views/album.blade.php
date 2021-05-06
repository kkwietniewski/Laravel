<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Api albumy</title>
</head>
<body>
  <h3>
      Dane z jsonplaceholder: <br> 
  </h3>
  <h4>https://jsonplaceholder.typicode.com/photos</h4>
  <h3>Albumy:</h3>
  <ul>
    @foreach ($albumsTab as $album)
    <li>
      AlbumId: {{$album['id']}}
      <p><b>Tytuł:</b> {{$album['title']}}</p>
      <img src="{{$album['thumbnailUrl']}}">
    </li>
    @endforeach
  </ul>
</body>
</html>