@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Strona administracyjna</div>

                    <div class="card-body">
                    
                        Strona użytkownika z rolą: admin<br>

                        Rola: {{Auth::user()->role}}

                        <div class="card-body">
                            <table>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Role</th>
                                @foreach($name as $user)
                                    <tr>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection