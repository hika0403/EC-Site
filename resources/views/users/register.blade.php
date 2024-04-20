@extends('layouts.layout')

<head>
    <title>新規会員登録</title>
    <link rel="stylesheet" href="../../../resources/scss/style.css">
</head>
@section('content')
    <div class="form">
        <h1>新規会員登録</h1>
        <div class="form-content">
            <form action="" method="post">
                @csrf
                <ul>
                    <li class="regist-content">
                        <label for="name">名前</label>
                        <input type="text" name="name" id="name"class="regist-content-input">
                    </li>
                    <li class="regist-content">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" id="email" class="regist-content-input" placeholder="例）tenis@gmail.com">
                    </li>
                    <li class="regist-content">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" id="password" class="regist-content-input">
                    </li>
                    <li>
                        <button type="submit" class="regist-btm">新規登録</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
@endsection