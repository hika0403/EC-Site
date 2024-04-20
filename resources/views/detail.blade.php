@extends('layouts.layout')

@section('content')
  <head>
    <link rel="stylesheet" href="../../resources/scss/style.css">
  </head>
  <main class="wrapper">
    <div class="index-link">
      <a href="{{ route('items') }}" class="intex-link-content">一覧に戻る</a>
    </div>
    <div class="detail">
      <!-- @if (session('err_msg'));
        <p>{{ session('err_msg') }}</p>
      @endif -->
      <div>
        <img class="detail-img" src="{{ $item->image_url }}">
      </div>
      <div class="detail-content">
        <p class="detail-content-name">{{ $item->name }}</p>
        <p class="detail-content-price">¥{{ number_format($item->price) }}（税込）</p>
        <div>
          <p class="detail-content-dsc">【商品説明】</p>
          <p class="detail-content-dsc">{{ $item->description }}</p>
        </div>
        <form action="{{route('addmycart')}}" method="post" class="detail-cart">
          @csrf
          <input type="hidden" name="item_id" value="{{$item->id}}">
          <input type="submit" value="カートに入れる" class="detail-cart-sentence">
        </form>
      </div>
    </div>
  </main>
@endsection