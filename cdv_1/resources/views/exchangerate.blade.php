<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kursy walut</title>
</head>
<body>
  <h3>
      Dane z nbp api: <br> 
  </h3>
  <h4>http://api.nbp.pl/api/exchangerates/tables/C</h4>
  <h3>2.Kursy:</h3>
  <ul>
    <table>
      <tr>
        <th>Waluta</th>
        <th>Kupno</th>
        <th>Sprzedaż</th>
      </tr>
      @foreach ($rates[0]['rates'] as $rate)
      @if ($rate['code'] == 'EUR')
      <tr>
        <td>{{$rate['currency']}}</td>
        <td>{{$rate['bid']}}</td>
        <td>{{$rate['ask']}}</td>
      </tr>
      @endif
      @if ($rate['code'] == 'CHF')
      <tr>
        <td>{{$rate['currency']}}</td>
        <td>{{$rate['bid']}}</td>
        <td>{{$rate['ask']}}</td>
      </tr>
      @endif
      @if ($rate['code'] == 'USD')
      <tr>
        <td>{{$rate['currency']}}</td>
        <td>{{$rate['bid']}}</td>
        <td>{{$rate['ask']}}</td>
      </tr>
      @endif
      @endforeach
  </table>
  </ul>
</body>
</html>