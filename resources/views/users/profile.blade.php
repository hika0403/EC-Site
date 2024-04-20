@extends('layouts.layout')

<head>
    <title>マイページ</title>
    <link rel="stylesheet" href="../../../resources/scss/style.css">
</head>
@section('content')
    {{\Illuminate\Support\Facades\Auth::user()->name}}でログインしています。

    <form action="{{route('user.logout')}}" method="post">
        @csrf
        <button class="logout-btm">ログアウト</button>
    </form>
@endsection