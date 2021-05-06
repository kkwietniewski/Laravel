<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Api</title>
</head>
<body>
  <h3>
      Dane z jsonplaceholder: <br> 
  </h3>
  <h4>https://jsonplaceholder.typicode.com/posts</h4>
  <!-- <pre>
    {{print_r($postsTab)}}
  </pre> -->
  <h3>Posty:</h3>
  <ul>
    @foreach ($postsTab as $post)
    <li>
      UserId: {{$post['id']}}
      <p><b>Tytuł:</b> {{$post['title']}}</p>
      <p><b>Opis:</b> {{$post['body']}}</p>
    </li>
    @endforeach
  </ul>
</body>
</html>