@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<div class="admin">
    <div class="weight__goal">
        <div class="weight__goal--item">
            <span class="item--title">目標体重</span>
            <p class="item--number">
                {{ $target->target_weight}}<span>kg</span>
            </p>
        </div>
        <div class="weight__goal--item">
            <span class="item--title">目標まで</span>
            <p class="item--number">
                {{ $diff > 0 ? '+' . $diff : $diff }}<span>kg</span>
            </p>
        </div>
        <div class="weight__goal--item">
            <span class="item--title">最新体重</span>
            <p class="item--number">
                {{ $weight->weight }}<span>kg</span>
            </p>
        </div>
    </div>
    <div class="weight__log">
        <div class="log__content">
            <div class="log__content--search">
                <input class="search--start" type="date">~<input class="search--end" type="date">
                <button class="search--button">検索</button>
            </div>
            <div class="log__content--add">
                <button class="add--button">データを追加</button>
            </div>
        </div>
        <div class="weight__record">
            <table class="record__table">
                <tr class="row--title">
                    <th class="title--date">日付</th>
                    <th class="title--weight">体重</th>
                    <th class="title--cal">食事摂取カロリー</th>
                    <th class="title--time">運動時間</th>
                    <th class="title--imag"></th>
                </tr>
                @foreach($logs as $log)
                <tr class="row--data">
                    <td class="title--date">{{ $log->date }}</td>
                    <td class="title--weight">{{ $log->weight }}kg</td>
                    <td class="title--cal">{{ $log->calories }}cal</td>
                    <td class="title--time">{{ $log->exercise_time }}</td>
                    <td class="title--imag"><a href=""><img src="{{ asset('img/pen.png') }}" alt="ペン"></a></td>
                </tr>
                @endforeach
            </table>
            {{ $logs->links()}}
        </div>
    </div>
</div>
@endsection