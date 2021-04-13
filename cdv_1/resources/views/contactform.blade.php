<h1 style="color:#054277;">Contact Form</h1>

<form action="Contact" method="get">
  {{@csrf_field()}}
  @error('name')
    {{$message}}
  @enderror
  <div>
    Name: <input type="text" name="name">
  </div>
  <br>
  @error('email')
    {{$message}}
  @enderror
  <div>
    Email: <input type="email" name="email">
  </div>
  <br>
  @error('password')
    {{$message}}
  @enderror
  <div>
    Password: <input type="password" name="password">
  </div>
  <br>
  @error('number')
    {{$message}}
  @enderror
  <div>
    Number: <input type="number" name="number">
  </div>
  <br>
  @error('gender')
    {{$message}}
  @enderror
  <div>
    Gender <label>Male<input type="radio" name="gender" value="Male" checked></label> <label>Female<input type="radio" name="gender" value="Female"></label>
  </div>
  <br>
  <input type="submit" value="Zatwierdź">
</form>