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
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'Weight Log')

@section('content')
<form action="" method="post">
  <table>
  @csrf
    <tr>
      <th>日付</th>
      <td><input type="text" name="date"></td>
    </tr>
    <tr>
      <th>体重</th>
      <td><input type="text" name="weight"></td>
    </tr>
    <tr>
      <th>摂取カロリー</th>
      <td><input type="text" name="calories"></td>
    </tr>
    <tr>
      <th>運動時間</th>
      <td><input type="text" name="exircise_time"></td>
    </tr>    <tr>
      <th>運動内容</th>
      <td><input type="text" name="exircise_content"></td>
    </tr>
  </table>

  <tr>
      <th></th>
      <td><button>戻る</button></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
</form>
@endsection
