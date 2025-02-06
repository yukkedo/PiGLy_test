@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/target_weight.css') }}">
@endsection

@section('content')
<main>
    <div class="update-form">
        <div class="form__title">
            <h1>目標体重設定</h1>
        </div>
        <form class="form__content" action="/weight_logs/goal_setting" method="post">
            @csrf
            <input class="content--input" type="text" name="target_weight" value="{{ old('target_weight') }}"> kg
            <div class="content--button">
                <a href="/weight_logs" class="button--back">戻る</a>
                <button class="button--update">更新</button>
            </div>
        </form>
    </div>
</main>
@endsection