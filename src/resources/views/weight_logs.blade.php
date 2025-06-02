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
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>{{$content ?? ''}}</h1>
  @section('title', 'PiGly')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>目標体重</th>
    <th>最新体重</th>
    <th>日付</th>
    <th>食事摂取カロリー</th>
    <th>運動時間</th>
  </tr>
  @foreach ($weight_logs as $weight_log)
  <tr>
    <td>{{$weight_log->id}}</td>
    <td>{{$weight_log->target_weight}}</td>
    <td>{{$weight_log->weight}}</td>
    <td>{{$weight_log->date}}</td>
    <td>{{$weight_log->calories}}</td>
    <td>{{$weight_log->exircise_time}}</td>
  </tr>
  @endforeach
</table>
@endsection

</body>

</html>
