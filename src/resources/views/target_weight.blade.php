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
        <form action="" class="form__content">
            <input class="content--input" type="text"> kg
            <div class="content--button">
                <a href="" class="button--back">戻る</a>
                <button class="button--update">更新</button>
            </div>
        </form>
    </div>
</main>
@endsection