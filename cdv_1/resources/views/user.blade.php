<form action="usercontroller1" method="get">
  {{@csrf_field()}}
  <input type="text" name="address">
  @error('address')
    {{$message}}
  @enderror
  <br><br>
  <input type="email" name="email">
  @error('email')
    {{$message}}
  @enderror
  <br><br>
  <input type="submit" value="Zatwierdź">
</form>