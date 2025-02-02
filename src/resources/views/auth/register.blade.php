<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録_STEP1</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
</head>

<body>
    <div class="register__form">
        <div class="form__title">
            <h1>P i G L y</h1>
            <h2>新規会員登録</h2>
            <p>STEP1 アカウント情報の登録</p>
        </div>

        <form class="form__content" action="">
            <div class="form__content--group">
                <div class="form__group--title">
                    <label class="form__content--label">お名前</label>
                </div>
                <div class="form__group--item">
                    <input class="form__content--input" type="text" placeholder="名前を入力">
                </div>
                <div class="form__group--error">
                    <p class="form__content--error" style="color: red">

                    </p>
                </div>
            </div>
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
                    <button class="form__group--submit">次に進む</button>
                </div>
                <div class="form__group--login">
                    <a class="form--link" href="">ログインはこちら</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>