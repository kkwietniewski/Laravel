<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator walut</title>
</head>
<body>
  <h1 style="color:#054277;">Kalkulator</h1>

  <form action="ExchangeRate" method="get">
  <div>
    Kwota zł: <input type="text" name="amount">
    <label for="currency">Wybierz walutę:</label>
    <select name="currency" id="currency">
      <option value="USD">Dolar amerykański</option>
      <option value="AUD">Dolar australijski</option>
      <option value="CAD">Dolar kanadyjski</option>
      <option value="EUR">Euro</option>
      <option value="HUF">Forint</option>
      <option value="CHF">Frank szwajcarski</option>
      <option value="GBP">Funt szterling</option>
      <option value="CZK">Korona czeska</option>
      <option value="DKK">Korona duńska</option>
      <option value="NOK">Korona norweska</option>
      <option value="SEK">Korona szwedzka</option>
      <option value="XDR">SDR (MFW)</option>
    </select>
  </div>
  <input type="submit" value="Zatwierdź">
</form>
@isset($resultTable)
@foreach(end($resultTable)[0] as $key => $val)
@if($key == 'bid')

  <p style="color:green;"><b>Za kwotę {{$amount}} zł można zakupić {{round($amount*$val, 0)}} {{strtolower($currency)}}</b></p>

@endif
@endforeach
@endisset
</body>
</html>