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
                45.0 <span>kg</span>
            </p>
        </div>
        <div class="weight__goal--item">
            <span class="item--title">目標まで</span>
            <p class="item--number">
                -1.5 <span>kg</span>
            </p>
        </div>
        <div class="weight__goal--item">
            <span class="item--title">最新体重</span>
            <p class="item--number">
                46.5 <span>kg</span>
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
                <tr class="row--data">
                    <td class="title--date">2025/1/1</td>
                    <td class="title--weight">kg</td>
                    <td class="title--cal">cal</td>
                    <td class="title--time"></td>
                    <td class="title--imag"><a href=""><img src="{{ asset('img/pen.png') }}" alt="ペン"></a></td>
                </tr>
                </table>
        </div>
    </div>
</div>
@endsection