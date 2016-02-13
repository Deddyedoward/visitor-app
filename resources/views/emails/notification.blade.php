@extends('layouts.emails')

@section('content')
Hello good morning, admin.

your recap :
@foreach($data as $key => $value)
  <h1>Name :</h1> {{ $value['name'] }} <br>
  <h1>Email :</h1> {{ $value['email'] }} <br>
  @if(!empty($value['phone']))
    <h1>Phone :</h1>{{$value['phone']}} <br>
  @endif
  <h1>Phone :</h1>No data <br>
  @if(!empty($value['occupation']))
    <h1>Phone :</h1>{{$value['occupation']}} <br>
  @endif
  <h1>Occupation:</h1>No data <br>
@endforeach

@endsection
