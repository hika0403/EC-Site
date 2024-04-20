@extends('layouts.layout')

<head>
    <title>ショッピングカート</title>
    <link rel="stylesheet" href="../resources/scss/style.css">
</head>
@section('content')
    <div class="mycart-container">
        <div>
            <h1>{{ Auth::user()->name }}さんのショッピングカート</h1>
            <p class="mycart-message">{{ $message ?? '' }}</p>
            <div class="mycart-items">
                @foreach($my_carts as $my_cart)
                <div class="mycart-item">
                    <img src="{{asset($my_cart->item->image_url)}}" alt="" class="mycart-item-img">
                    <p>{{ $my_cart->item->name }}</p>
                    <p>¥{{ number_format($my_cart->item->price) }}（税込）</p>
                    <form action="{{route('cartdelete')}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="item_id" value="{{ $my_cart->item->id }}">
                        <input type="submit" value="削除する" class="mycart-item-delete" onClick="return confirm('本当に削除しますか？');">
                    </form>
                </div>
                @endforeach
            </div>
            <a href="{{ route('items') }}" class="index-link-content">商品一覧へ</a>
        </div>
    </div>
@endsection