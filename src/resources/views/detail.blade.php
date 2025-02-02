@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="detail__form">
        <div class="detail__title">
            <h2>Weight Log</h2>
        </div>

        <form action="" class="detail__content">
            <div class="content__item">
                <div class="content__item--title">
                    <span>日付</span>
                </div>
                <div class="content__item--input">
                    <input class="input" type="date">
                </div>
                <div class="content__item--error">

                </div>
            </div>
            <div class="content__item">
                <div class="content__item--title">
                    <span>体重</span>
                </div>
                <div class="content__item--input">
                    <input class="input--tag" type="text"> kg
                </div>
                <div class="content__item--error">

                </div>
            </div>
            <div class="content__item">
                <div class="content__item--title">
                    <span>摂取カロリー</span>
                </div>
                <div class="content__item--input">
                    <input class="input--tag" type="text"> cal
                </div>
                <div class="content__item--error">

                </div>
            </div>
            <div class="content__item">
                <div class="content__item--title">
                    <span>運動時間</span>
                </div>
                <div class="content__item--input">
                    <input class="input" type="time">
                </div>
                <div class="content__item--error">

                </div>
            </div>
            <div class="content__item">
                <div class="content__item--title">
                    <span>運動内容</span>
                </div>
                <div class="content__item--textarea">
                    <textarea class="textarea" name="" id="" placeholder="運動内容を追加">

                </textarea>
                </div>
                <div class="content__item--error">

                </div>
            </div>

            <div class="form__button">
                <a class="form__button--back">戻る</a>
                <button class="form__button--updata">更新</button>
                <a class="form__button--delete">
                    <img class="delete--img" src="{{ asset('img/dustbox.png') }}" alt="ゴミ箱ゴミ箱">
                </a>
            </div>
        </form>
    </div>
</div>
@endsection