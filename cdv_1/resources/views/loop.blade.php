<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela</title>
</head>
<body>
  <table>
    <tr>
      <th>Marka</th>
      <th>Model</th>
      <th>Kolor</th>
    </tr>
    @foreach ($cars as $car)
      <tr>
        <td>{{$car['mark']}}</td>
        <td>{{$car['model']}}</td>
        <td>{{$car['color']}}</td>
      </tr>
    @endforeach
  </table>
  <hr>

  {{--FOREACH--}}
  @foreach($cars as $car)
  <div>
    @if ($loop->first)
      <span>
        Pierwszy element tablicy:
      </span>
    @endif

    @if ($loop->last)
      <span>
        Ostatni element tablicy:
      </span>
    @endif

      {{$loop->index}} - 
      Marka: {{$car['mark']}}, Model: {{$car['model']}}, Kolor: {{$car['color']}}
  </div>
  @endforeach
</body>
</html>