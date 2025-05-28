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
    <th>target_weight</th>
    <th>weight</th>
    <th>date</th>
    <th>calories</th>
    <th>exircise_time</th>
  </tr>
  @foreach ($weight_logs as $weight_log)
  <tr>
    <td>{{$Weight_logs->id}}</td>
    <td>{{$Weight_log->target_weight}}</td>
    <td>{{$Weight_log->weight}}</td>
    <td>{{$Weight_log->date}}</td>
    <td>{{$Weight_logs->calories}}</td>
    <td>{{$Weight_logs->exircise_time}}</td>
  </tr>
  @endforeach
</table>
@endsection
