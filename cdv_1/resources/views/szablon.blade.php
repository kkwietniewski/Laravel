@extends('layouts.site')

@section('title', 'tytuł')

@section('sidebar')
  @parent
  <p>Dołączane do głównego paska bocznego.</p>
@endsection

@section('content')
  <p>Treść strony</p>
@endsection