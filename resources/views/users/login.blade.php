@extends('layouts.layout')

<head>
    <title>ログイン</title>
    <link rel="stylesheet" href="../../../resources/scss/style.css">
</head>
@section('content')
    <div class="form">
        <div class="form-content">
            <h1>ログイン</h1>
            <form class="" action="" method="post">
                @csrf
                <ul>
                    <li>
                        <!-- <label for="email">メールアドレス</label> -->
                        <input type="email" name="email" class="login-content" id="email" placeholder="メールアドレス">
                    </li>
                    <li>
                        <!-- <label for="password">パスワード</label> -->
                        <input type="password" name="password" class="login-content" id="password" placeholder="パスワード">
                    </li>
                    <li>
                        <button type="submit" class="login-btm">ログイン</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="login-regist">
            <h2>はじめてご利用の方</h2>
            <a href="register">
                <button class="login-regist-text">新規会員登録</button>
            </a>
        </div>
    </div>
@endsection