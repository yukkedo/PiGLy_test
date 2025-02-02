<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>

<body>
    <div class="login__form">
        <div class="form__title">
            <h1>P i G L y</h1>
            <h2>ログイン</h2>
        </div>

        <form class="form__content" action="">
            <div class="form__content--group">
                <div class="form__group--title">
                    <label class="form__content--label">メールアドレス</label>
                </div>
                <div class="form__group--item">
                    <input class="form__content--input" type="email" placeholder="メールアドレスを入力">
                </div>
                <div class="form__group--error">
                    <p class="form__content--error" style="color: red">

                    </p>
                </div>
            </div>
            <div class="form__content--group">
                <div class="form__group--title">
                    <label class="form__content--label">パスワード</label>
                </div>
                <div class="form__group--item">
                    <input class="form__content--input" type="password" placeholder="パスワードを入力">
                </div>
                <div class="form__group--error">
                    <p class="form__content--error" style="color: red">

                    </p>
                </div>
            </div>

            <div class="form__button">
                <div class="form__group--button">
                    <button class="form__group--submit">ログイン</button>
                </div>
                <div class="form__group--login">
                    <a class="form--link" href="">アカウント作成はこちら</a>
                </div>
            </div>
        </form>
</body>

</html>