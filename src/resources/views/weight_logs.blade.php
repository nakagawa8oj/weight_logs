@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'weight_logs.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  @foreach ($weight_logs as $weight_log)
  <tr>
    <td>{{$Weightlogs->id}}</td>
    <td>{{$Weightlogs->target_weight}}</td>
    <td>{{$Weightlogs->weight}}</td>
    <td>{{$Weightlogs->date}}</td>
    <td>{{$Weightlogs->calories}}</td>
    <td>{{$Weightlogs->exircise_time}}</td>
  </tr>
  @endforeach
</table>
@endsection
