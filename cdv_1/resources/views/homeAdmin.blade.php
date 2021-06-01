@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Strona administracyjna
                    </div>
                    <div class="card-body">
                    Strona uzytkownika zalogowanego z rolą: admin<hr>
                    Rola uzytkownika: {{ Auth::user()->role }}
                    <table>
                        <tr>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Role</th>
                        </tr>
                        @foreach($name as $user)
                            <tr>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>{{ $user->role }}</td>
                            </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection