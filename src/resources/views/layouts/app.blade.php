<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>体重管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <div class="header">
        <div class="header__title">
            PiGLy
        </div>
        <div class="header__button">
            
            <a class="header__button--setting" href="/weight_logs/goal_setting">
                <img src="{{ asset('img/setting.png') }}" alt="歯車">目標体重設定
            </a>
            <form class="logout__form" action="/logout" method="post">
                @csrf
                <button class="header__button--logout"><img src="{{ asset('img/logout.png') }}" alt="ドア">ログアウト</button>
            </form>
        </div>
    </div>

    <main>
        @yield('content')
    </main>
</body>

</html>