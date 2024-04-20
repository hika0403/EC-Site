@extends('layouts.layout')

@section('content')
  <main class="wrapper">
    <div class="side-category">
      <p class="side-category-title">カテゴリーで探す</p>
      <ul class="side-category-list">
        <li class="side-category-list-all"><a href="">すべての商品</a></li>
        <li>
          <a class="side-category-list-item">ラケット</a>
          <ul>
            <li><a href="/tennis_shop/public/category/1" class="side-category-list-item-child">YONEX</a></li>
            <li><a href="/tennis_shop/public/category/2" class="side-category-list-item-child">PRINCE</a></li>
          </ul>
        </li>
        <li>
          <a class="side-category-list-item">トップス</a>
          <ul>
            <li><a href="/tennis_shop/public/category/3" class="side-category-list-item-child">レディース</a></li>
            <li><a href="/tennis_shop/public/category/4" class="side-category-list-item-child">メンズ</a></li>
          </ul>
        </li>
        <li>
          <a class="side-category-list-item">パンツ</a>
          <ul>
            <li><a href="/tennis_shop/public/category/5" class="side-category-list-item-child">レディース</a></li>
            <li><a href="/tennis_shop/public/category/6" class="side-category-list-item-child">メンズ</a></li>
          </ul>
        </li>
        <li>
          <a class="side-category-list-item">シューズ</a>
          <ul>
            <li><a href="/tennis_shop/public/category/7" class="side-category-list-item-child">レディース</a></li>
            <li><a href="/tennis_shop/public/category/8" class="side-category-list-item-child">メンズ</a></li>
          </ul>
        </li>
        <li>
          <a class="side-category-list-item">小物</a>
          <ul>
            <li><a href="/tennis_shop/public/category/9" class="side-category-list-item-child">キャップ</a></li>
            <li><a href="/tennis_shop/public/category/10" class="side-category-list-item-child">靴下</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="main">
      <div class="main-title">
        <h2>商品一覧</h2>
      </div>
      <div class="main-item">
        @foreach($items as $item)
          <table>
            <tr class="main-item-table">
              <td>
              <a href="/tennis_shop/public/item/{{ $item->id }}"><img src="{{ $item->image_url }}"></a>
              </td>
              <td>
                <p class="item-category"><a href="/view/category/ct32"></a></p>
              </td>
              <td>
                <p class="item-name"><a href="/tennis_shop/public/item/{{ $item->id }}">{{ $item->name }}</a></p>
              </td>
              <td>
                <p class="price"><a href="/tennis_shop/public/item/{{ $item->id }}">¥{{ number_format($item->price) }}</a><span>（税込）</span></p>
              </td>
              <td class="item-list-cart">
                <form action="{{route('addmycart')}}" method="post" class="item-list-cart-form">
                  @csrf
                  <input type="hidden" name="item_id" value="{{$item->id}}">
                  <input type="submit" value="カートに入れる" class="item-list-cart-sentence">
                </form>
              </td>
            </tr>
          </table>
        @endforeach
      </div>
    </div>
  </main>
@endsection