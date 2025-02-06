<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録_STEP2</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/first_weight.css') }}">
</head>

<body>
    <div class="first-weight__form">
        <div class="form__title">
            <h1>P i G L y</h1>
            <h2>新規会員登録</h2>
            <p>STEP2 体重データの登録</p>
        </div>

        <form class="form__content" action="/register/step2" method="post">
            @csrf
            <div class="form__content--group">
                <div class="form__group--title">
                    <label class="form__content--label">現在の体重</label>
                </div>
                <div class="form__group--item">
                    <input class="form__content--input" type="text" name="weight" value="{{ old('weight') }}" placeholder="現在の体重を入力">kg
                </div>
                <div class="form__group--error">
                    <p class="form__content--error" style="color: red">

                    </p>
                </div>
            </div>
            <div class="form__content--group">
                <div class="form__group--title">
                    <label class="form__content--label">目標の体重</label>
                </div>
                <div class="form__group--item">
                    <input class="form__content--input" type="text" name="target_weight" value="{{ old('target_weight') }}" placeholder="目標の体重を入力">kg
                </div>
                <div class="form__group--error">
                    <p class="form__content--error" style="color: red">

                    </p>
                </div>
            </div>

            <div class="form__button">
                <div class="form__group--button">
                    <button class="form__group--submit">アカウント作成</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>